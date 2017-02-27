@extends('layouts.master')

@section('content')

    @foreach($users as $user)
        <p><a href="/users/{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</a></p>

    @endforeach



@endsection