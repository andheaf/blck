@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do List</h1>
@stop

@section('content')
    <div class="container">
        <h1>Edit the Task</h1>

        <form method="POST" action="/task/{{ $task->id }}">

            <div class="form-group">
                <textarea name="description" class="form-control">{{$task->description }}</textarea>
            </div>


            <div class="form-group">
                <button type="submit" name="update" class="btn btn-primary">Update task</button>
            </div>
            {{ csrf_field() }}
        </form>



    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop