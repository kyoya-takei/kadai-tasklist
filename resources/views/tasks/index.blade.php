@extends('layouts.app')

@section('content')

@if (session('alert'))
    <div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
@endif

<h1>みんなのタスク</h1>

@if (count($tasks) > 0)        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>task</th>
                <th>user</th>
                <th>status</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!}</td>
                <!--<td>{{ $task->user['name'] }}</td>-->
                <td>{{ $task->user->name }}</td>

                @if ($task->status == 'comp')
                    <td class="strong_red">complete!</td>
                @else
                    <td>incomplete</td>
                @endif
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endif

{!! $tasks->render('pagination::bootstrap-4')!!}

{!! link_to_route('tasks.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}

@endsection
