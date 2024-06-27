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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $hashedPassword = md5($request->input('password'));
        $user = DB::table('signs')
            ->where('email', $request->input('email'))
            ->first();

        if ($user) {
            if ($user->password === $hashedPassword) {
                return redirect('/home');
            } else {
                return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
            }
        } else {
            return redirect('/signup')->with('error', 'You have no account. Please create a new account.');
        }
    }
}
