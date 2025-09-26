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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

use App\Http\Controllers\StudentController;

// Student Routes
Route::middleware(['auth', 'verified'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [StudentController::class, 'profile'])->name('profile');
    Route::get('/timetable', [StudentController::class, 'timetable'])->name('timetable');
    Route::get('/attendance', [StudentController::class, 'attendance'])->name('attendance');
    Route::get('/exams', [StudentController::class, 'exams'])->name('exams');
    Route::get('/calendar', [StudentController::class, 'calendar'])->name('calendar');
    Route::get('/assignments', [StudentController::class, 'assignments'])->name('assignments');
    Route::get('/notices', [StudentController::class, 'notices'])->name('notices');
});
