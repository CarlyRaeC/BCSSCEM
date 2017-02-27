@extends('layouts.master')

@section('content')
    <h2>Create Task</h2>
    <hr>
    <form class="form" method="POST" action="/tasks" id="newTask">

        {{ csrf_field() }}

        <div class="form-group form-inline">

            <label for="body">Task: </label>
            <input type="text" id="body" name="body" placeholder="">
        </div>
        <div class="form-group  form-inline">
            <label for="user_id">User: </label>
            <select class="form-control" form="newTask" name="user_id" id="user_id">
                @foreach($users as $user)
                    <option name="{{ $user->id }}"
                            value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary">Create</button>

        </div>


        <div class="form-group">
            @if (count($errors))
                @include('layouts.errors')
            @endif
        </div>
    </form>



@endsection