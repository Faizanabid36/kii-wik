<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProfile;
use Illuminate\Support\Facades\Session;
use App\Skill;
use App\User;
use App\UserExtra;
use App\UserPortfolio;
use App\UserQualification;
use App\UserSkill;
use App\VerificationDocument;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * ------------------------------------------------
     * Function for General Tab in Edit Profile
     *-------------------------------------------------
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateuser(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:54',
            'email' => 'required',
            'Picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if (request()->hasFile('Picture')) {
            $file = $request->file('Picture');
            $imageName = auth()->user()->id . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/users/avatar/');
            $file->move($destinationPath, $imageName);
            (\request()->merge(['avatar' => ('users/avatar/' . $imageName)]));
        }
        User::whereId($id)->update(\request()->except('_token', 'Picture', 'postal'));
        try {

            return back()->with('success', 'Account Settings Updated');
        } catch (\Exception $exception) {
            return back()->with('error', 'Postal Code Does not Exist');
        }
    }

    public function show_user_details($id)
    {
        return User::whereId($id)->with('family_members')->get();
    }

    /**
     * ------------------------------------------------
     * Function for Change Password Setting Tab
     *-------------------------------------------------
     */

    public function changePassword(Request $request, $id)
    {
        $this->validate($request, [
            'old_password' => 'sometimes|required|min:6',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|min:6|required_with:new_password|same:new_password',
        ]);
        //if old pass is not matched
        if (isset($request->old_password)) {
            if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
                return back()->with('error', "Incorrect Password Entered.");
            }
        }
        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return back()->with('success', "Password Changed! ");
    }

    /**
     * ------------------------------------------------
     * Function for Change Password Setting Tab
     *-------------------------------------------------
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update_user_extras(Request $request, $id)
    {
        $display_phone = $request->get('display_phone');
        $display_address = $request->get('display_address');
        if (isset($display_phone))
            request()->merge(['hide_phone' => 0]);
        else
            request()->merge(['hide_phone' => 1]);
        if (isset($display_address))
            request()->merge(['hide_address' => 0]);
        else
            request()->merge(['hide_address' => 1]);
        UserExtra::where('user_id', $id)->update(\request()->except('_token', 'display_phone', 'display_address'));
        return back()->with('success', 'Settings Updated');
    }


    public function update_profile()
    {
        //dd(Route::getCurrentRoute()->getActionName());
        $user = User::whereId(auth()->user()->id)->with(['skills', 'tasks', 'qualification', 'portfolio'])->first();
        $location = DB::table('user_locations')->where('user_id', auth()->user()->id)->first();
        $skills = Skill::whereNotIn('id', function ($q) {
            $q->select('skill_id')->from('user_skills')->whereUserId(auth()->user()->id);
        })->get();
        if (!$user->qualification) {
            $user->qualification = new UserQualification();
        }
        $verification=VerificationDocument::where(['user_id'=>auth()->user()->id])->first();
        return view('account.profile', compact('user', 'skills','verification', 'location'));
    }
    public function update_qualification(Request $request, $id)
    {

        $get_around = json_encode($request->get_around);
        unset($request['get_around']);
        $request->merge(['get_around' => $get_around, 'user_id' => $id]);

        $r = UserQualification::updateOrCreate(
            ['id' => $request['id']],
            $request->except('_token')
        );


        return back()->with('success', 'Profile Updated Successfully');
    }
    public function portfolio_delete($id)
    {
        $r = UserPortfolio::find($id);
        if ($r) {
            $r->delete();
        }
        return back()->with('success', 'Profile Updated Successfully');
    }
    public function update_profile_submit(StoreProfile $request)
    {
        if ($request->hasFile('pic'))
            $request->merge(['avatar' => storeImage($request->file('pic'), \auth()->user()->id . '/avatar')]);
        if ($request->hasFile('pic2')) {
            $path = storeImage($request->file('pic2'), \auth()->user()->id . '/cover');
            $request->merge(['cover' => $path]);
        }
        $skills = $request['skills'];
        $user = User::updateOrCreate(
            [
                'id' => auth()->user()->id
            ],
            $request->except('_token', 'pic', 'skills', 'good_at', 'get_around', 'languages', 'qualification', 'work_exp', 'pic2')

        );
        
        UserSkill::where('user_id', $user->id)->delete();
        if ($skills) {
            foreach ($skills as $s) {
                UserSkill::create(

                    [
                        'user_id' => $user->id,
                        'skill_id' => $s
                    ]
                );
            }
        }


        return back()->with('success', 'Profile Updated Successfully');
    }
    public function doc_delete($id)
    {
        $r = VerificationDocument::find($id);
        if ($r) {
            $r->delete();
        }
        return back()->with('success', 'Profile Updated Successfully');
    }
    public function update_portfolio(Request $request)
    {
        if (request()->hasFile('attachment')) {
            foreach ($request->file('attachment') as $file) {

                $request->merge(["attach" => storeImage($file, \auth()->user()->id . '/portfolio')]);

                UserPortfolio::updateOrCreate(
                    ['id' => $request['id']],
                    $request->except('_token', 'attachment')
                );
            }
        }
        return back()->with('success', 'Profile Updated Successfully');
    }
    public function update_docs(Request $request)
    {
//        dd($request);
        $certifications_attach = array();
        $award_attach = array();
        $this->validate(request(), [
            /*'pin' => 'required',
            'pn' => 'required',
            'award_attach' => 'required',*/
            'state' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'skills' => 'required',
            'certifications_attach' => 'required',
        ]);
        if ($request->hasFile('certifications_attach')) {
            $path = './verification/';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            foreach ($request->file('certifications_attach') as $file) {
                $extension = "." . $file->getClientOriginalExtension();
                $name = rand(1, 100) . time() . $extension;
                $file->move($path, $name);
                $certifications_attach[] = $name;
            }
        }
        /*if ($request->hasFile('award_attach')) {
            $path = './verification/';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            foreach ($request->file('award_attach') as $file) {
                $extension = "." . $file->getClientOriginalExtension();
                $name = rand(1, 100) . time() . $extension;
                $file->move($path, $name);
                $award_attach[] = $name;
            }
        }*/
        $user = VerificationDocument::create([
            'user_id' => $request->user_id,
            'pin' => '',
            'pn' => '',
            'criminal' => 'no',
            'state' => $request->state,
            'email' => $request->email,
            'phone' => $request->phone,
            'registration_no' => $request->registration_no,
            'certifications' => $request->certifications,
            'awards' => 'no',
           'award_attach' => json_encode($award_attach),
            'certifications_attach' => json_encode($certifications_attach),
        ]);

        $skills=$request->skills;
        foreach ($skills as $skill){
            UserSkill::firstOrCreate(
                ['user_id'=>$request->user_id,'skill_id'=>$skill],
                ['user_id'=>$request->user_id,'skill_id'=>$skill]
            );
        }
        // if (request()->hasFile('certifications')) {
        //     foreach ($request->file('certifications') as $file) {
        //         $request->merge(["attach" => storeFile($file, \auth()->user()->id . '/verification')]);
        //         VerificationDocument::updateOrCreate(
        //             ['id' => $request['id']],
        //             $request->except('_token', 'certifications')
        //         );
        //     }
        // }
        // if (request()->hasFile('award_attach')) {
        //     foreach ($request->file('award_attach') as $file) {
        //         $request->merge(["attach" => storeFile($file, \auth()->user()->id . '/verification')]);
        //         VerificationDocument::updateOrCreate(
        //             ['id' => $request['id']],
        //             $request->except('_token', 'award_attach')
        //         );
        //     }
        // }
        return back()->with('success', 'Documents Sent for Verification');
    }

    public function password_change(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'sometimes|required|min:6',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|min:6|required_with:new_password|same:new_password',
        ]);
        if (isset($request->old_password)) {
            if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
                return back()->with('error', "Incorrect Password Entered.");
            }
        }
        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return back()->with('success', "Password Changed! ");
    }
    public function view_docs($id)
    {
        $user = User::whereId($id)->with(['skills', 'tasks', 'qualification', 'userReviews', 'docs'])->first();
        return view('admin.user_doc', compact('user'));
    }
    public function view_profile($id)
    {

        $user = User::whereId($id)->with(['skills', 'tasks', 'qualification', 'userReviews', 'docs'])->firstOrFail();
        $reviews = [];
        $average_rating = 0;

        if (count($user->userReviews) > 0) {

            $reviews_array = $user->userReviews;

            $average_rating = $reviews_array->pluck('rating')->toArray();

            $average_rating = array_sum($average_rating) / count($average_rating);

            foreach ($reviews_array as $review) {
                array_push($reviews, ['user' => User::whereId($review->from_user_id)->first(), 'rating' => $review->rating, 'review' => $review->review, 'created_at' => $review->created_at]);
            }
        }
        if ($user->role == 'admin') {
            return view('account.admin_profile', compact('user', 'average_rating', 'reviews'));
        }
        return view('account.my_profile', compact('user', 'average_rating', 'reviews'));
    }
    public function view_profile_as()
    {
        Session::put('viewAsPublic', 'true');
        return \redirect()->route('company.profile.view', auth()->id());
    }

    public function get_user_detial(Request $request)
    {
        $user = DB::select("Select verification_documents.*, name, role, loc, users.email, avatar, users.phone, is_approved,description  from verification_documents join users  on user_id = users.id where verification_documents.id=".$request->user_id);
        return view('admin.verification_user', compact('user'));
    }
}
