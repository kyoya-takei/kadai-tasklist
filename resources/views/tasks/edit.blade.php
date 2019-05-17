@extends('layouts.app')

@section('content')

@if (isset($task))
    <h1>id: {{ $task->id }}の編集</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク')!!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    <p>進捗状況</p>
                    {!! Form::radio('status', 'comp') !!}
                    {!! Form::label('status', '完了') !!}
                    {!! Form::radio('status', 'incomp', true) !!}
                    {!! Form::label('status', '未完了') !!}
                </div>
                
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endif

@endsection