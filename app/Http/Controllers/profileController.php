<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sign;

class profileController extends Controller
{
    public function index($id)
    {
        $user = Sign::findOrFail($id);
        return view('frontend.profile', compact('user'));
    }

    public function delete($id)
    {
        Sign::destroy($id);
        return redirect()->route('login');
    }
    public function edit($id){
        $user = Sign::findOrFail($id);
        return view('frontend.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = Sign::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('profile', ['id' => $user->id]);
    }
}
