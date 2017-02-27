@extends('layouts.master')

@section('content')

    <h2>{{ $user->firstname }} {{ $user->lastname }}</h2>
    <p>Email: {{ $user->email }}</p>
    <hr>
    @foreach ($user->tasks as $task)
        <p><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></p>
    @endforeach
    <hr>
    <a href="/users">Users</a>
@endsection