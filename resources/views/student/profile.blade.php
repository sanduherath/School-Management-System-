@extends('layouts.student')

@section('title', 'My Profile')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">My Profile</h2>
        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Role:</strong> {{ auth()->user()->role }}</p>

        <div class="mt-4">
            <a href="{{ route('student.dashboard') }}" class="text-blue-600 hover:underline">Back to dashboard</a>
        </div>
    </div>
@endsection
