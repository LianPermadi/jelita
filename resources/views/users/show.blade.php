<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
        </ul>

        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to Users List</a>
    </div>
@endsection
