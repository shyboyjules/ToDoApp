<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('task.index', ['task' => $task]);
        
    }

    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed' => 'required',
        ]);


            $newtasks = Task::create($data);

        return redirect(route('task.index'));
    }

    public function edit(task $task){
        return view('task.edit', ['task' => $task]);
    }
    public function update(task $task, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed' => 'required',
        ]);

        $task->update($data);

        return redirect(route('task.index'))-> with('success', 'task updated successfully');
    }

    public function destroy(task $task){
        $task->delete();

        return redirect(route('task.index'))-> with('success', 'task deleted successfully');
    }
}