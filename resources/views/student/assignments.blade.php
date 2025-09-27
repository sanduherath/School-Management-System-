@extends('layouts.student')

@section('title', 'Assignments')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Assignments</h1>

        <div class="bg-white shadow rounded-lg p-4">
            <p class="text-gray-600">Your current assignments are listed below.</p>

            <ul class="mt-4 space-y-2">
                <li class="p-3 border rounded">Math - Worksheet 5 — Due: 2025-10-05</li>
                <li class="p-3 border rounded">Science - Lab report — Due: 2025-10-08</li>
                <li class="p-3 border rounded">History - Essay draft — Due: 2025-10-15</li>
            </ul>
        </div>
    </div>
@endsection
