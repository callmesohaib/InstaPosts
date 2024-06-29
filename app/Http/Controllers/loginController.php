<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $password = $request->input('password');


        $user = DB::table('signs')->where('email', $email)->first();

        if (!$user) {
            return redirect('/signup')->with('error', 'You have no account. Please create a new account.');
        }

 
        if (Hash::check($password, $user->password)) {
            Auth::loginUsingId($user->id);
            return redirect('/home/' . $user->id);
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
}
