@extends('layouts.app')

@section('content')

<h1>新規タスク追加</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
            <div class="form-group">
                {!! Form::label('content', '新規タスク') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                <div>進捗状況</div>
                {!! Form::radio('status', 'comp') !!}
                {!! Form::label('status', '完了') !!}
                {!! Form::radio('status', 'incomp', true) !!}
                {!! Form::label('status', '未完了') !!}
            </div>
            
            <!--
            <div class="form-group">
                <div class="control-label">進捗状況</div>
                <div class="radio">
                    {!! Form::radio('status', 'comp', ['class' => 'form-check-input', 'id' => 'comp']) !!}
                    {!! Form::label('status', '完了', ['class' => 'form-label', 'for' => 'comp']) !!}
                </div>
                <div class="radio">
                    {!! Form::radio('status', 'incomp', true, ['class' => 'form-check-input', 'id' => 'incomp']) !!}
                    {!! Form::label('status', '未完了', ['class' => 'form-label', 'for' => 'incomp']) !!}
                </div>
            </div>-->
            
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection