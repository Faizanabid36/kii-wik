<?php

namespace App\Http\Controllers;

use App\BusinessCategory;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill()
    {
        $skills = Skill::all();
        return \view('admin.category.add', compact('skills'));
    }

    public function addskill(Request $request)
    {
        if (!auth()->user()->role == 'admin')
            abort(404);
        $this->validate($request, [
            'category_title' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $destinationPath = storeImage($request->file('icon'));
        $bc = new Skill();
        $bc->attachment_path = $destinationPath;
        $bc->name = $request->get('category_title');
        $bc->skill_slug = preg_replace('/\W|\_+/m', '-', $request->input('category_title'));
        $bc->save();
        return back()->with('created', 'Created Successfully');
    }

    public function viewskill()
    {
        $categories = Skill::all();
        return view('admin.category.view', compact('categories'));
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
}
