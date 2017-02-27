@extends('layouts.master')


@section('content')

    @foreach ($tasks as $task)
        <p><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></p>
    @endforeach


@endsection
