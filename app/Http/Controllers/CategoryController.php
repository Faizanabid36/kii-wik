<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function skill(){
        $skills = Skill::all();
        return \view('admin.category.add',compact('skills'));
    }

    public function addskill(Request $request)
    {
        if ($request->isMethod('post')) {
           
            $data = $request->all();
            $cat = new Skill;
            $cat->name = $data['category_title'];
           $cat->attachment_path=storeImage($data['icon'],'/Skill');
           $cat->skill_slug = implode("_",explode(" ",$data['category_title']));
           
            $cat->save();
            return back()->with('created','Created Successfully');
        }
        // // $details = Category::where(['parent_id'=>0])->get();
        // return view('admin.product.category.add_category' , \compact('details'));
    }
    public function viewskill()
    {
        $cat = Skill::all();
        return view('admin.category.view', compact('cat'));
    }
    public function deleteskill($id)
    {
        Skill::where(['id'=>$id])->delete();
        return back()->with('deleted','Category Deleted');
    }

    public function editskill(Request $request , $id=null)
    {
        Skill::whereId($request->input('id'))->update([
            'name' => $request->input('name'),
        ]);
        return back()->with('updated', 'Updated Successfully');
    }
    public function delete($id)
    {
        Skill::whereId($id)->delete();
        return back()->with('updated', 'Updated Successfully');;
    }
}
