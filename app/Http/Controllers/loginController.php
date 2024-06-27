<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view("frontend.login");
    }
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        $hashedPassword = md5($request->input('password'));
        // Check if the email and password exist in the signs table
        $exists = DB::table('signs')
            ->where('email', $request->input('email'))
            ->where('password', $hashedPassword) // Note: Passwords should be hashed in a real application
            ->exists();

        if ($exists) {
            return redirect('/home');
        } else {
            return redirect('/signup');
        }
    }
}
