@extends('layouts.app')

@section('content')
    <h1>Tasks for Today</h1>

    @if ($tasks->isEmpty())
        <p>No tasks are scheduled for today.</p>
    @else
        <table border="1" cellpadding="8">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
