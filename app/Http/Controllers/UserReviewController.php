<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserReview;
class UserReviewController extends Controller
{
    
    public function addReview(Request $request)
    {
        $request->merge(['from_user_id'=>auth()->id()]);
      
        UserReview::updateOrCreate(
            $request->except('_token')
        );
        return back()->withSuccess("Review Added");
    }

}
