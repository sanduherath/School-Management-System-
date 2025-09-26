<!-- Student Sidebar Component -->
<aside class="w-64 bg-gradient-to-b from-blue-900 to-indigo-900 text-white min-h-screen">
    <div class="p-6">
        <h1 class="text-2xl font-bold">Joyous School</h1>
        <p class="text-blue-200 text-sm mt-2">Student Portal</p>
    </div>

    <nav class="mt-6">
        <div class="px-4 py-2 text-blue-300 uppercase text-xs font-semibold">Main</div>
        <a href="{{ route('student.dashboard') }}"
            class="flex items-center px-6 py-3 text-white bg-blue-800 border-l-4 border-blue-400">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            Dashboard
        </a>

        <a href="{{ route('student.profile') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            My Profile
        </a>

        <a href="{{ route('student.timetable') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Timetable
        </a>

        <a href="{{ route('student.attendance') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                </path>
            </svg>
            Attendance
        </a>

        <a href="{{ route('student.exams') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                </path>
            </svg>
            Exam Records
        </a>

        <a href="{{ route('student.calendar') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Academic Calendar
        </a>

        <div class="px-4 py-2 text-blue-300 uppercase text-xs font-semibold mt-6">Other</div>

        <a href="{{ route('student.assignments') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                </path>
            </svg>
            Assignments
        </a>

        <a href="{{ route('student.notices') }}"
            class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                </path>
            </svg>
            Noticeboard
        </a>
    </nav>

    <div class="absolute bottom-0 w-64 p-4 bg-blue-800">
        <div class="flex items-center">
            <div class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center">
                <span class="text-white font-bold">{{ substr(auth()->user()->name, 0, 1) }}</span>
            </div>
            <div class="ml-3">
                <p class="text-white text-sm font-medium">{{ auth()->user()->name }}</p>
                <p class="text-blue-200 text-xs">Student</p>
            </div>
        </div>
    </div>
</aside>
