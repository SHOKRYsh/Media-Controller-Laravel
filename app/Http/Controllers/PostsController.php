<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //To make Accesss control
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::paginate(6);
        return view('posts.index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

        $fileNameToStore = null;
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $file_name = $file->getClientOriginalName();
            $fileNameToStore = Time() . '_' . $file_name;
            $file->move('covers', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.png';
        }

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->cover_image = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->save();

        //OR

        // Post::create($request->all()); //to use this way make fillable array in Model Post
        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = post::findOrFail($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();
        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts')->with('delete', 'Post Deleted');
    }
}
