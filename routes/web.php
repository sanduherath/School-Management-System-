<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/works', function () {
    return view('works');
})->name('works');
// Contact routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::post('/contact/send', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Log the contact submission (replace with mail/send logic later)
    Log::info('Contact form submission', $data);

    return redirect()->back()->with('status', 'Thanks — your message has been received.');
})->name('contact.send');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Role-specific dashboards
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');

    // Student profile
    Route::get('/student/profile', function () {
        return view('student.profile');
    })->name('student.profile');

    // Student timetable
    Route::get('/student/timetable', function () {
        return view('student.timetable');
    })->name('student.timetable');

    // Student attendance
    Route::get('/student/attendance', function () {
        return view('student.attendance');
    })->name('student.attendance');

    // Student exams
    Route::get('/student/exams', function () {
        return view('student.exams');
    })->name('student.exams');

    // Student calendar
    Route::get('/student/calendar', function () {
        return view('student.calendar');
    })->name('student.calendar');

    // Student assignments
    Route::get('/student/assignments', function () {
        return view('student.assignments');
    })->name('student.assignments');

    // Student notices
    Route::get('/student/notices', function () {
        return view('student.notices');
    })->name('student.notices');

    Route::get('/teacher/dashboard', function () {
        return view('teacher.dashboard');
    })->name('teacher.dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
