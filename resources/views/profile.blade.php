@extends('layouts.app')

@section('content')
    <h1>Profile</h1>

    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Full name:</strong> {{ $user->full_name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
@endsection