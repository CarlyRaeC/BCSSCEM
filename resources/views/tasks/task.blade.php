@extends('layouts.master')

@section('content')
    <?php $tz = new DateTimeZone("America/Vancouver"); ?>
    <?php $created = $task->created_at; ?>

    <h2>{{ $task->body }}</h2>
    <p>Created
        By: {{ $task->user->firstname }} {{ $task->user->lastname }} <?=  $created->setTimezone($tz)->format("F j, Y, g:i a"); ?></p>
    <p><a href="/tasks">Back</a></p>
@endsection