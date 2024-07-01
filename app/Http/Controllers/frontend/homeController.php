<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Sign;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index($id)
    {
        $user = DB::table('signs')->where('id', $id)->first();
        $posts = Post::with('comments')->orderBy('created_at', 'desc')->get();

        return view('frontend.index', compact('posts', 'user'));
    }


    public function getComment(Request $request, $postId, $id)
    {
        $request->validate([
            'comment' => 'required|max:255',
        ]);

        Comment::create([
            'post_id' => $postId,
            'user_id' => $id,
            'comment' => $request->input('comment')

        ]);

        return redirect('/home/' . $id);
    }


    public function upload($id)
    {
        $user = Sign::findOrFail($id);
        return view('frontend.upload', compact('user'));
    }

    public function picturePost(Request $request, $id)
    {
        $user = Sign::findOrFail($id);
        $post = new Post;

        if ($request->hasfile('img')) {
            foreach ($request->file('img') as $file) {
                $fileName = 'user-' . $user->id . 'pic-' . time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('frontend/uploads');
                $file->move($destinationPath, $fileName);
                $post->user_id = $user->id;
                $post->image = $fileName;
                $post->save();

            }
        }

        return redirect('/home/' . $user->id);
    }


    public function deletePost($postId)
    {

        $post = Post::findOrFail($postId);
        $post->comments()->delete();
        $imagePath = public_path('frontend/uploads/' . $post->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $post->delete();
        return redirect()->back();
    }

}
