<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('website.pages.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'creator' => 'required|max:255',
        ]);

        Post::create($validatedData);

        return redirect()->route('post.index')->with('success', 'Post created successfully!');
    }

    // Other methods (show, edit, update, destroy) can be implemented similarly




    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        $post = Post::findOrFail($post); // Retrieves the post by its ID or fails with a 404
    
        return view('website.pages.posts.show', compact('post')); // Pass the post to the view
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('website.pages.posts.edit', compact('post')); // Pass the post to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'creator' => 'required|max:255',
        ]);
        $post->update($data) ;

        return redirect()->route('post.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete() ;
        return redirect()->route('post.index');
    }
}
