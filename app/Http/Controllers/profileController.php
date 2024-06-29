<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
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
        $user = Sign::findOrFail($id);
        $imagePath = public_path('frontend/user-profiles/' . $user->img);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        Sign::destroy($id);
        return redirect()->route('login');
    }
    public function edit($id)
    {
        $user = Sign::findOrFail($id);
        return view('frontend.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {

        $user = Sign::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('profile', ['id' => $user->id]);
    }
    public function changePhoto(Request $request, $id)
    {
        $user = Sign::findOrFail($id);
        $userId = $user->id;
        $originalExtension = $request->file('img')->getClientOriginalExtension();
        $destinationPath = public_path('frontend/user-profiles');
        $filename = sprintf('Pic-%d.%s', $userId, $originalExtension);
        $request->file('img')->move($destinationPath, $filename);
        $user->img = $filename;
        $user->save();
        return redirect()->route('profile', ['id' => $user->id]);
    }
}
