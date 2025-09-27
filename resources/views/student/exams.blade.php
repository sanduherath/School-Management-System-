@extends('layouts.student')

@section('title', 'Exams')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Exams</h1>

        <div class="bg-white shadow rounded-lg p-4">
            <p class="text-gray-600">Upcoming exams and schedules will appear here.</p>

            <table class="min-w-full mt-4 table-auto">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-4 py-2 text-left">Subject</th>
                        <th class="px-4 py-2 text-left">Date</th>
                        <th class="px-4 py-2 text-left">Time</th>
                        <th class="px-4 py-2 text-left">Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Mathematics</td>
                        <td class="border px-4 py-2">2025-10-10</td>
                        <td class="border px-4 py-2">09:00 AM</td>
                        <td class="border px-4 py-2">Main Hall</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">English</td>
                        <td class="border px-4 py-2">2025-10-12</td>
                        <td class="border px-4 py-2">11:00 AM</td>
                        <td class="border px-4 py-2">Room 204</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
