@extends('layouts.student')

@section('title', 'Student Dashboard')

@section('content')
    <div class="px-4 py-6">
        <div class="bg-white p-6 rounded shadow mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Hello, {{ auth()->user()->name }}!</h1>
            <p class="text-gray-600 mt-2">Welcome to your student dashboard. Here's your academic overview.</p>
            <p class="mt-4 text-sm text-gray-600">Today is {{ now()->format('l, F j, Y') }} — {{ now()->format('h:i A') }}
            </p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm font-medium text-gray-600">Attendance</p>
                <p class="text-2xl font-bold text-gray-900">92%</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm font-medium text-gray-600">Average Grade</p>
                <p class="text-2xl font-bold text-gray-900">A-</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm font-medium text-gray-600">Pending Assignments</p>
                <p class="text-2xl font-bold text-gray-900">3</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm font-medium text-gray-600">Upcoming Exams</p>
                <p class="text-2xl font-bold text-gray-900">2</p>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Activities</h3>
                <ul class="space-y-4 text-sm text-gray-700">
                    <li>New assignment posted — Mathematics (Due tomorrow)</li>
                    <li>Assignment graded — Science project (Grade: A)</li>
                    <li>Notice posted — School will be closed next Monday</li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Today's Schedule</h3>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li>Mathematics — 9:00 AM - 10:00 AM (Room 201)</li>
                    <li>Science — 10:15 AM - 11:15 AM (Lab 3)</li>
                    <li>English — 11:30 AM - 12:30 PM (Room 105)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
