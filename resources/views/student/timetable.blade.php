@extends('layouts.student')

@section('title', 'Timetable')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">My Timetable</h2>
        <p class="text-sm text-gray-600">This is a placeholder timetable for the student. Replace with real schedule data.
        </p>

        <table class="w-full mt-4 table-auto border">
            <thead>
                <tr class="bg-gray-50">
                    <th class="p-2 border">Day</th>
                    <th class="p-2 border">9:00 - 10:30</th>
                    <th class="p-2 border">10:45 - 12:15</th>
                    <th class="p-2 border">13:15 - 14:45</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border">Monday</td>
                    <td class="p-2 border">Maths</td>
                    <td class="p-2 border">Physics</td>
                    <td class="p-2 border">English</td>
                </tr>
                <tr>
                    <td class="p-2 border">Tuesday</td>
                    <td class="p-2 border">History</td>
                    <td class="p-2 border">Chemistry</td>
                    <td class="p-2 border">Art</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
