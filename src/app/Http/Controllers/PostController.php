<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function show($userId)
    {
        $posts = User::find($userId)->posts()->orderBy('created_at', 'DESC')->get();

        foreach ($posts as $post) {
            $post->contentShort = substr($post->content, 0, 199);
        }

        return view('posts.main', ['posts' => $posts]);
    }

    public function add()
    {
        return view('posts.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
            'image' => 'required'
        ]);

        $path = $request->file('image')->store('images', 'public');

        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $path;

        $post->save();

        return redirect()->route('main', ['user_id' => Auth::id()]);
    }

    public function getPost($userId, $id)
    {
        $post = Post::find($id);

        return view('posts.post', ['post' => $post]);
    }
}
