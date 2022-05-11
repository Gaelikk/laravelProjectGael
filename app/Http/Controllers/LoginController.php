<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginCheck(Request $request): Redirector|Application|RedirectResponse
    {
        $input = ([
            'username' => $request->username,
            'password' => $request->password
        ]);
        if (Auth::attempt($input)) {
            $request->session()->regenerate();
            return redirect('');
        }
        return redirect('login');
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        Auth::logout();
        return redirect('');
    }
}
