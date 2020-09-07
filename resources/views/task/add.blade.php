@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do List</h1>
@stop

@section('content')
    <div class="container">
        <h2>Add New Task</h2>

        <form method="POST" action="/task">

            <div class="form-group">
                <textarea name="description" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
            {{ csrf_field() }}
        </form>


    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
