@extends('layouts.app')

@section('content')
    @if (Auth::check())
        aaaaaaaa
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to task management application!!</h1>
                {!! link_to_route('signup.get', 'Sign up Now!!', [], ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection