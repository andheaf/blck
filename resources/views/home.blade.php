@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do List</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
                <div class="card-header">Tasks List</div>
                <div class="card-body">
                    <a href="/task" class="btn btn-primary">Add new Task</a>
                    <table class="table mt-4">
                        <thead><tr>
                            <th colspan="2">Tasks</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->tasks as $task)
                            <tr>
                                <td>
                                    {{$task->description}}
                                </td>
                                <td>

                                    <form action="/task/{{$task->id}}">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                        <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop