<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sign;

class signController extends Controller
{

    public function index()
    {
        return view("frontend.signup");
    }

    public function sign(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'username' => 'required | unique',
                'email' => 'required | email',
                'password' => 'required|min:4',
            ]
        );

        $person = new Sign;
        $person->name = $request['name'];
        $person->username = $request['username'];
        $person->email = $request['email'];
        $person->password = md5($request['password']);
        $person->save();
        return redirect('/');


    }
}
