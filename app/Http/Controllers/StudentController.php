<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function profile()
    {
        return view('student.profile');
    }

    public function timetable()
    {
        return view('student.timetable');
    }

    public function attendance()
    {
        return view('student.attendance');
    }

    public function exams()
    {
        return view('student.exams');
    }

    public function calendar()
    {
        return view('student.calendar');
    }

    public function assignments()
    {
        return view('student.assignments');
    }

    public function notices()
    {
        return view('student.notices');
    }
}
