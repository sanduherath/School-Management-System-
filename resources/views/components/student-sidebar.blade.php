<aside class="bg-white rounded-lg shadow p-4">
    <div class="mb-6">
        <div class="text-sm text-gray-500">{{ auth()->user()->name ?? 'Guest' }}</div>
        <h2 class="text-lg font-semibold text-gray-900">Student Menu</h2>
        <p class="text-xs text-gray-400">Student Portal</p>
    </div>

    <nav class="space-y-1">
        <a href="{{ route('student.dashboard') }}"
            class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100 {{ request()->routeIs('student.dashboard') ? 'bg-gray-100 font-medium' : '' }}">Dashboard</a>

        <div class="mt-4 text-xs text-gray-400 uppercase font-semibold">Academic</div>
        <a href="{{ route('student.timetable') }}"
            class="flex items-center gap-3 px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Timetable</a>
        <a href="{{ route('student.attendance') }}"
            class="flex items-center gap-3 px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Attendance</a>
        <a href="{{ route('student.exams') }}"
            class="flex items-center gap-3 px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Exams</a>
        <a href="{{ route('student.calendar') }}"
            class="flex items-center gap-3 px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Calendar</a>

        <div class="mt-4 text-xs text-gray-400 uppercase font-semibold">Other</div>
        <a href="{{ route('student.assignments') }}"
            class="flex items-center gap-3 px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Assignments</a>
        <a href="{{ route('student.notices') }}"
            class="flex items-center gap-3 px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Notices</a>

        <div class="mt-6 border-t pt-4">
            <a href="{{ route('student.profile') }}" class="block text-sm text-gray-700 hover:underline">My Profile</a>
            <a href="{{ route('home') }}" class="block text-sm text-gray-600 mt-2 hover:underline">Back to site</a>

            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                @csrf
                <button type="submit" class="text-sm text-red-600 hover:text-red-700">Logout</button>
            </form>
        </div>
    </nav>
</aside>
