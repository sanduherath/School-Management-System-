<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Route;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     */
    public function toResponse($request)
    {
        $user = $request->user();

        if ($user) {
            if (method_exists($user, 'isStudent') && $user->isStudent()) {
                return redirect()->intended('/student/dashboard');
            }

            if (method_exists($user, 'isTeacher') && $user->isTeacher()) {
                return redirect()->intended('/teacher/dashboard');
            }

            if (method_exists($user, 'isAdmin') && $user->isAdmin()) {
                return redirect()->intended('/admin/dashboard');
            }
        }

        // fallback
        return redirect()->intended(config('fortify.home') ?? '/dashboard');
    }
}
