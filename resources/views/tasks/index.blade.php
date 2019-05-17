@extends('layouts.app')

@section('content')

@if (session('alert'))
    <div class="alert alert-danger">{{ session('alert') }}</div>
@endif

<h1>タスク一覧</h1>

@if (count($tasks) > 0)        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>task</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {!! link_to_route('tasks.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}
@endif

@endsection

