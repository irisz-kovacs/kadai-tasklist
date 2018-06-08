
@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} Tasks</h1>

<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id],['class' => 'btn btn-success']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection