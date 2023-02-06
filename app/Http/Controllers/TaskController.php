<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::paginate(15);
        return view('dashboard.task.index' , compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',

        ]);

        Task::create($request->all());
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('dashboard.task.view' , compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('dashboard.task.edit' ,compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',

        ]);
        $task->update($request->all());
        return redirect()->route('task.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task , Request $request)
    {

        $task->delete();

        return redirect()->route('task.index');

    }


    public function updatevalue(Request $request)
    {
        $request->validate([
            'check' => 'required|array',
            'check.*' => 'boolean'
        ]);
        $integerIDs = array_map('intval',  $request->check);

        foreach($integerIDs as $index => $val) {
            Task::where('id' , $index)->update([
                'check' =>$val,
            ]);
        }

        if ($request->delete=='delete'){
            Task::where('check' , 1)->delete();
        }

            return redirect()->route('task.index');

    }



}
