<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
    public function index()
    {
        return view("frontend.signup");
    }

    public function sign(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:signs',
            'email' => 'required|email|unique:signs',
            'password' => 'required|min:4'
        ]);

        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'img' => 'profile.jpg',
        ];

        DB::table('signs')->insert($data);

        return redirect('/')->with('success', 'Account created successfully. Please log in.');
    }
}
