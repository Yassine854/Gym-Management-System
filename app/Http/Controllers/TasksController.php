<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Sport;
use App\Coach;
use Carbon\Carbon;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $tasks = Task::all();
    $coaches=Coach::all();
    $sports=Sport::all();
    return view('AdminTemp/tasks/index', compact(['tasks','coaches','sports']));
}

public function create()
{
    $coaches=Coach::all();
    $sports=Sport::all();
    return view('AdminTemp/tasks/create',compact('coaches','sports'));
}

public function store(Request $request)
{
    $date = Carbon::now();
    $request->validate(['start'=>'required|after_or_equal:today','end'=>'required|after_or_equal:start',
    'sports_id'=>'required','coaches_id'=>'required','end'=>'required','day'=>'required'],['day.required'=>'The day is required.','start.required' => 'The starting time is required.',
    'end.required' => 'The ending time is required.'
    ,'coaches_id.required' => 'You should select a coach.',
    'sports_id.required' => 'You should select a sport.','start.after_or_equal' => 'You must chose a date after or equal today.','end.after_or_equal' => 'You must chose a date after or equal the starting time.']);
    $task=new Task();
    $task->sports_id=$request->sports_id;
    $task->coaches_id=$request->coaches_id;
    $task->start=$request->start;
    $task->end=$request->end;
    // $date=date('w',strtotime($task->start));
    // $task->day=$date;
    $task->day=$request->day;
    $task->save();
    return redirect()->route('tasks.index');
}


public function edit(Task $task)
    {
      $coaches=Coach::all();
      $sports=Sport::all();
      return view('AdminTemp/tasks/edit',compact(['coaches','sports','task']));

    }



public function update(Request $request ,Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }


    public function destroy(Request $request,$id){
        $task =Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
