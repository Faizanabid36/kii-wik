<?php

namespace App\Http\Controllers;

use App\User;
use App\Task;
use App\TaskBidding;
use App\TaskAssignee;

class RouteViewsController extends Controller
{
    //
    public function user_dashboard()
    {
        if (!isset(auth()->user()->id))
        return view('auth.login');
    else {
       
        if (auth()->user()->role=='admin')
        {
            $tasks = Task::all();
            $biddings=TaskBidding::all();
            $completed=TaskAssignee::all();
            $users=User::all();
            $array=[count($tasks),count($biddings),count($completed),count($users)];
            return view('admin.main_dashboard',compact('array'));
        }
        else
        {
            $Mytasks = Task::whereUserId(auth()->id())->get();
            $Mybiddings=TaskBidding::whereUserId(auth()->id())->with('task')->get();
            $Mycompleted=TaskAssignee::whereUserId(auth()->id())->whereStatus('completed')->with('task')->get();
            $array=[count($Mytasks),count($Mybiddings),count($Mycompleted)];
            return view('user.user_dashboard',compact('array'));
        }
            
    }
    }
    public function main_dashboard()
    {
        if(!auth()->user()->role=='admin')
            return back();
        
        return view('admin.main_dashboard');
    }
    public function login_page()
    {
        if (!isset(auth()->user()->id))
            return view('auth.login');
        else {
            if (auth()->user()->role=='admin')
                return view('admin.main_dashboard');
            else
                return view('user.user_dashboard');
        }
    }

    public function add_cat()
    {
        if(!auth()->user()->role=='admin')
            return back();
        return \view('admin.category.add');
    }
    public function view_cat()
    {
        if(!auth()->user()->role=='admin')
            return back();
        return \view('admin.category.view');
    }

    public function account()
    {
        $user= User::whereId(auth()->user()->id)->first();
        // $user=auth()->user()->with('family_members');
        // return $user;
        return \view('frontend.account.edit_profile', compact('user'));
    }

//    public function signup()
//    {
//        return \view('auth.secondreg');
//    }


}
