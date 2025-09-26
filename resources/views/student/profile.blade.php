@extends('layouts.student')

@section('title', 'My Profile')

@section('content')
    <div class="px-4 py-6">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">My Profile</h3>
                <p class="mt-1 text-sm text-gray-600">Manage your personal information and settings.</p>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-md font-medium text-gray-900 mb-4">Personal Information</h4>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->name }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                <p class="mt-1 text-sm text-gray-900">{{ Auth::user()->email }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Student ID</label>
                                <p class="mt-1 text-sm text-gray-900">STU-{{ Auth::id() }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Class/Grade</label>
                                <p class="mt-1 text-sm text-gray-900">Grade 10 - Section A</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-md font-medium text-gray-900 mb-4">Academic Information</h4>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Current GPA</label>
                                <p class="mt-1 text-sm text-gray-900">3.75 / 4.0</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Attendance Rate</label>
                                <p class="mt-1 text-sm text-gray-900">92%</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Class Teacher</label>
                                <p class="mt-1 text-sm text-gray-900">Mr. Johnson</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="button"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
