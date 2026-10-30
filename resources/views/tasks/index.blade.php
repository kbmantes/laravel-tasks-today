@extends('layouts.app')

@section('content')
    <h1>Complete Task List</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>

        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->task_date }}</td>
            </tr>
        @endforeach
    </table>
@endsection