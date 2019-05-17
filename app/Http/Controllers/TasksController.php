<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // tasklistの一覧表示
        $tasks = Task::all();
        
        return view('tasks.index', [
                'tasks' => $tasks,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新規作成ページ
        $task = new Task;
        
        return view('tasks.create', [
                'task' => $task,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //新規タスク格納
        
        //バリデーション
        $this->validate($request, [
                'content' => 'required|max:191',
                'status' => 'required|max:10',
            ]);
            
        $task = new Task;
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //タスク詳細表示
        $task = Task::find($id);
        
        return view('tasks.show', [
                'task' => $task,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //タスク編集画面
        $task = Task::find($id);
        
        return view('tasks.edit', [
                'task' => $task,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //タスク更新
        
        //バリデーション
        $this->validate($request, [
                'content' => 'required|max:191',
                'status' => 'required|max:10',
            ]);
        $task = Task::find($id);
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //タスク削除
        $task = Task::find($id);
        $task->delete();
        
        return redirect('/')->with('alert', '削除しました');
    }
}
