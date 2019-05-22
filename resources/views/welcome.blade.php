@extends('layouts.app')

@section('content')
    @if (Auth::check())
    @else
        <div class="text-center">
            <h1>Welcome task management application!!</h1>
            {!! link_to_route('signup.get', 'Sign up Now!!', [], ['class' => 'btn btn-primary']) !!}
        </div>
    @endif
@endsection