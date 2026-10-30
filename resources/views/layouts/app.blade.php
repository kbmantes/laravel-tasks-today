<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tasks for Today' }}</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Welcome</a> |
        <a href="{{ url('/tasks') }}">Task List</a> |
        <a href="{{ url('/profile') }}">Profile</a> |
        <a href="{{ url('/about') }}">About</a>
    </nav>

    <hr>

    @yield('content')
</body>
</html>