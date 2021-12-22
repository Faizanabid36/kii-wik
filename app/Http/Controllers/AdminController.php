<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Task;
use App\Contact;
use App\VerificationDocument;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Contracts\Activity;

class AdminController extends Controller
{
    public function users_list($user)
    {
        $users = User::where('role', '=', $user)->get();
        return view('admin.user_list', compact('users'));
    }
    public function verification_list()
    {

        $users = DB::select("Select verification_documents.*, name, users.email, avatar, users.phone, is_approved  from verification_documents join users on user_id = users.id order by id desc; ");

        // $users = User::where('role', '=', 'company')->where('is_approved', '=', '0')->get();
        return view('admin.verification_list', compact('users'));
    }

    public function consultation_requests()
    {

        $data=Contact::get();
        return view('admin.consultation_requests', compact('data'));
    }

    public function tasks_list()
    {
        $tasks = Task::orderByDesc('id')->get();
        return view('admin.task', compact('tasks'));
    }
    public function delete_user($id)
    {
        User::whereId($id)->delete();
        return back();
    }
    public function delete_user2($id)
    {
        DB::select("Delete from tasks where user_id = ".$id.";");
        DB::select("DElete from users where id = ".$id.";");
        // User::whereId($id)->delete();
        return back();
    }
    public function approve_user()
    {
        $id = \request('id');
        $user = VerificationDocument::find($id);
        if ($user->status == '1') {
            $user->status = '0';
        } else {
            $user->status = '1';
        }
        $user->save();
        return approveUser($user->status, $user->id);
    }

    public function approve_useraaa()
    {
        $id = \request('id');
        $user = User::find($id);
        if ($user->active_status == '1') {
            $user->active_status = '0';
        } else {
            $user->active_status = '1';
        }
        $user->save();
        return approveUser($user->active_status, $user->id);
    }
}
