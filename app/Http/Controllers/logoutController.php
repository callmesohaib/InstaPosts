<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout()
    {
        return redirect('/'); 
    }
}
