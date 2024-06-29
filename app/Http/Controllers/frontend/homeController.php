<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
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


    public function getComment(Request $request, $postId)
    {
        $request->validate([
            'comment' => 'required|max:255',
        ]);

        Comment::create([
            'post_id' => $postId,
            'comment' => $request->input('comment')
        ]);

        return redirect('/');
    }


    public function upload()
    {
        return view('frontend.upload');
    }

    public function picturePost(Request $request)
    {
        $i = $request->session()->get('image_counter', 1);

        if ($request->hasfile('img')) {
            foreach ($request->file('img') as $file) {
                $fileName = 'pic-' . $i . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('frontend/uploads');
                $file->move($destinationPath, $fileName);
                try {
                    Post::create(['image' => $fileName]);
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Failed to create Post record: ' . $e->getMessage());
                }
                $i++;
            }
            $request->session()->put('image_counter', $i);
        }

        return redirect('/')->with('success', 'Images uploaded successfully');
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
