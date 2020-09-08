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

            <!-- Date -->
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="due_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" im-insert="false">
                </div>
                <!-- /.input group -->
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

@section('js')
    <script>
        $(function() {
            $( "#datetimepicker" ).datepicker();
        });
    </script>
@stop

