<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Session;

class MoneyController extends Controller
{
    public function index()
    {
        $all_task = array();
        if (auth()->user()) {
            $all_task = Task::when(isset(auth()->user()->id), function ($q) {
                return $q->where('user_id', '<>', auth()->id());
            })->when(\request('q'), function ($q) {
                return $q->where('title', 'like', '%' . \request('q') . '%');
            })->when(\request('type'), function ($q) {
                return $q->whereType(\request('type'));
            })->whereStatus('open')->latest()->paginate(15);
            Session::put('fromAction', 'earn');
        } else {

            
                $all_task = Task::when(!isset(auth()->user()->id), function ($q) {
                    return $q->where('title', 'like', '%' . \request('q') . '%');
                })->when(\request('type'), function ($q) {
                    return $q->whereType(\request('type'));
                })->whereStatus('open')->latest()->paginate(15);
                Session::put('fromAction', 'earn');
        }

        if (request('radius') && request('location')) {
            $taskIDs = [];
            foreach ($all_task as $task) {
                $distanceUnit = getDistance(request('location'), $task->loc, 'K');
                $distance = explode(' ', $distanceUnit)[0];
                if ((float)$distance <= (float)request('radius')) {
                    array_push($taskIDs, $task->id);
                }
            }
            $tasks = Task::whereIn('id', $taskIDs)->latest()->paginate(15);
        } else {
            $tasks = $all_task;
        }


        return view('money.earn_money', compact('tasks'));
    }
}
