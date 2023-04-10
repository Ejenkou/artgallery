<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
    // Debugging statement
    if(Auth::attempt($credentials)){
        // Debugging statement
        return redirect()->route('home');
    }
    // Debugging statement
    return redirect()->intended('error');
}

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

}