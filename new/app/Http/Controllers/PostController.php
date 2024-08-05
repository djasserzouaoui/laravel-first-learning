<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::latest()->paginate(3);
        return view('post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,User $user)
    {
        $user=auth()->user();
        $field=$request->validate([
            'title'=>['required'],
            'body'=>['required'],
        ]);
        $post=$user->posts()->create($field);

        return redirect()->route('view.dashboard')->with('true','your post was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $field=$request->validate([
            'title'=>['required'],
            'body'=>['required'],
        ]);
        $post->update($field);
        return redirect()->route('view.dashboard')->with('true','your post was updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('view.dashboard')->with('true','your post was deleted!');
    }
}
