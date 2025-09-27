@extends('layouts.student')

@section('title', 'Notices')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Notices</h1>

        <div class="bg-white shadow rounded-lg p-4">
            <p class="text-gray-600">School notices and announcements will appear here.</p>

            <ul class="mt-4 space-y-2 text-gray-700">
                <li class="p-3 border rounded">2025-09-20: School closed for maintenance</li>
                <li class="p-3 border rounded">2025-09-25: Parents meeting at 5:00 PM</li>
                <li class="p-3 border rounded">2025-10-01: New term begins</li>
            </ul>
        </div>
    </div>
@endsection
