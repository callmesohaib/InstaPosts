<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
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

        $email = $request->input('email');
        $password = md5($request->input('password'));  // Hash the input password

        $user = DB::table('signs')->where('email', $email)->first();

        if (!$user) {
            // Email not found, redirect to signup
            return redirect('/signup')->with('error', 'You have no account. Please create a new account.');
        }

        // Manually check the hashed password
        if ($user->password === $password) {
            // Log the user in
            Auth::loginUsingId($user->id);
            return redirect()->intended('/home');
        } else {
            // Invalid credentials
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
}
