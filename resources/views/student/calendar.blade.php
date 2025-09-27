@extends('layouts.student')

@section('title', 'Calendar')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Calendar</h1>

        <div class="bg-white shadow rounded-lg p-4">
            <p class="text-gray-600">Student calendar with events will appear here.</p>

            <div class="mt-4">
                <ul class="list-disc pl-6 text-gray-700">
                    <li>2025-10-01: Term starts</li>
                    <li>2025-10-10: Mathematics Exam</li>
                    <li>2025-10-12: English Exam</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
