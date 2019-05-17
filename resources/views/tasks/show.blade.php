@extends('layouts.app')

@section('content')

@if (isset($task))
    <h1>id: {{ $task->id }}のタスク詳細</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    <div class="b-inline">
        {!! link_to_route('tasks.index', '戻る', null, ['class' => 'btn btn-primary']) !!}
        {!! link_to_route('tasks.edit', '編集', ['id' => $task->id], ['class' => 'btn btn-success']) !!}
    </div>
    
    <div class="b-inline">
        {!! Form::model($task, ['route' => ['tasks.destroy', 'id' => $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endif

@endsection