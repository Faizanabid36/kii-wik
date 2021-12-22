<?php

namespace App\Http\Controllers;

use App\Notifications\TaskCreated;
use App\Notifications\BiddedOnTask;
use App\Notifications\BiddedOnMyTask;
use App\Notifications\NewTaskNotify;
use App\Task;
use App\TaskAssignee;
use App\TaskAttachment;
use App\TaskBidding;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::orderBy('id', 'desc')->get();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->merge(['user_id' => auth()->user()->id]);
        $request = $request->merge(['due_date' => date('Y-m-d H:i:s', strtotime($request->due_date))]);
        $task = Task::create(
            $request->except('_token', 'pic', 'desc_text')
        );
        if ($request->hasFile('pic')) {
            $file = storeImage($request->file('pic'), \auth()->user()->id . '/tasks');
            TaskAttachment::create(
                [
                    'task_id' => $task->id,
                    'attach_url' => $file,
                ]
            );
        }
        auth()->user()->notify(new TaskCreated(auth()->user()->id, $task));
        $users=User::where(['role'=>'company'])->orWhere(['role'=>'freelancer'])->get();
        foreach ($users as $user) {
            Notification::send($user, new NewTaskNotify($task, $user->id));
        }
        return redirect()->route('user.task.my_task', 'done=true');
    }

    //For showing specific task
    public function show($id, Request $request)
    {
        
        // echo "<pre>";
        // print_r ($request->bidding);
        // echo "</pre>";
        
        if (Session::has('fromAction')) {
            if (Session::get('fromAction')=="earn") {
                $tasks=Task::where('user_id', '<>', auth()->id())->whereStatus('open')->orderBy('id', 'desc')->get();
            } else {
                $tasks = Task::where('user_id', auth()->id())->where('status', 'open')->orderBy('id', 'desc')->get();
            }
        } else {
            $tasks = Task::where('user_id', auth()->id())->where('status', 'open')->orderBy('id', 'desc')->get();
        }
        $assignees_ids=TaskAssignee::whereTaskId($id)->get()->pluck('user_id');
        $biddings=count(TaskBidding::whereTaskId($id)->whereNotIn('user_id', $assignees_ids)->get());


        $task=Task::whereId($id)->firstOrFail();
        return view('task.single_task', \compact('task', 'tasks', 'biddings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::whereId($id)->firstOrFail();
        //dd('succes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Task::updateOrCreate(
            ['id'=>$request['id']],
            $request->except('_token', 'pic')
        );
        if ($request->hasFile('pic')) {
            TaskAttachment::whereTaskId($id)->delete();
            $file = storeImage($request->file('pic'), \auth()->user()->id . '/tasks');
            TaskAttachment::create(
                [
                    'task_id' => $task->id,
                    'attach_url' => $file,
                ]
            );
        }
        return back()->with('success', 'Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::whereId($id)->delete();
        return redirect()->route('user.task.pending_task');
    }

    public function deleted_models()
    {
        $Tasks = Task::withTrashed()
            ->get();
        dd($Tasks->all());
    }

    public function restore($id)
    {
        $Tasks = Task::withTrashed()
            ->whereId($id)->restore();
        dd('success');
    }

    public function bidOnTask(Request $request)
    {
        $request->merge(['user_id'=>auth()->id()]);
        $bidding=TaskBidding::whereUserId(auth()->id())->whereTaskId($request['task_id'])->first();
        if ($bidding==null) {
            TaskBidding::create(
                $request->except('_token', 'taskUser_id')
            );
            $task=Task::find($request['task_id']);
            auth()->user()->notify(new BiddedOnTask(auth()->user(), $task));
            User::find($request['taskUser_id'])->notify(new BiddedOnMyTask($request['taskUser_id'], auth()->user(), $task));

            return back()->withSuccess("You bidded on task!");
        } else {
            return back()->withSuccess("You have already bidded on this task!");
        }
    }
    public function myCompletedTasks($id)
    {
        $completed=TaskAssignee::whereUserId($id)->whereStatus('completed')->with('task')->get();
        return view('task.completed_tasks', compact('completed'));
    }
    public function completeTask($task_id, $user_id)
    {
        TaskAssignee::update(['user_id'=>$user_id, 'task_id'=>$task_id], ['status'=>'completed']);
        Task::update(['id'=>$task_id ], ['status'=>'completed']);
        return back()->withSuccess("Task Completed");
    }
    public function assignTasker(Request $request)
    {
        $assignees=TaskAssignee::whereTaskId($request->task_id)->get();
        $task=Task::find($request->task_id);
        if (count($assignees)<$task->people) {
            $request->merge(["status"=>"pending"]);
            TaskAssignee::create(
                $request->except('_token')
            );
            if (count($assignees)+1==$task->people) {
                Task::updateOrCreate(
                    [
                "id"=>$request->task_id
            ],
                    ["status"=>"assigned"]
                );
            }
            $user=User::where(['id'=>$request->user_id])->get();
            Notification::send($user, new NewTaskNotify($task, $request->user_id, 'assign'));
            return back()->withSuccess("Task assigned");
        }
        return back()->withSuccess("Already assigned required number of taskers.");
    }

    public function myTasks()
    {
        $tasks = Task::where('user_id', auth()->id())->where('status', 'open')->orderBy('id', 'desc')->get();

        Session::put('fromAction', 'myTasks');
        return view('task.show', compact('tasks'));
    }

    public function getBiddings($id)
    {
        $assignees_ids=TaskAssignee::whereTaskId($id)->get()->pluck('user_id');
        $biddings=TaskBidding::whereTaskId($id)->whereNotIn('user_id', $assignees_ids)->with('bidder')->get();
        return view('task.biddings', compact('biddings'));
    }
    public function getUserBiddings($id)
    {
        $biddings=TaskBidding::whereUserId($id)->with('task')->orderBy('id', 'desc')->get();
        return view('task.user_biddings', compact('biddings'));
    }
    public function getPendingTasks()
    {
        $tasks = Task::where('user_id', auth()->id())->where('status', 'open')->orderBy('id', 'desc')->get();
        Session::put('fromAction', 'myTasks');
        return view('task.show', compact('tasks'));
    }
    public function completed_task()
    {
        $tasks = Task::where('user_id', auth()->id())->where('status', 'completed')->get();
        Session::put('fromAction', 'myTasks');
        return view('task.show', compact('tasks'));
    }
    public function getAssignedTasks()
    {
        $tasks = Task::where('user_id', auth()->id())->where('status', 'assigned')->get();
        Session::put('fromAction', 'myTasks');
        return view('task.show', compact('tasks'));
    }
    public function getAssignees($id)
    {
        $assignees=TaskAssignee::whereTaskId($id)->with('task')->get();
        $taskers=[];
        foreach ($assignees as $assignee) {
            $user=User::whereId($assignee->user_id)->first();
            array_push($taskers, ["user_id"=>$assignee->user_id,"name"=>$user->name,"phone"=>$user->phone,"amount"=>$assignee->done_amount,'task'=>$assignee->task]);
        }

        return view('task.assignees', compact('taskers', 'id'));
    }
    public function getbidding()
    {
        return view('task.mybids');
    }
}
