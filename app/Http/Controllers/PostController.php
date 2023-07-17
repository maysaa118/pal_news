<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required|unique:posts,title',

        ]);

        //upload the image
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = 'post_'.time().'.'.$ex;
        $request->file('image')->move(public_path('upload'),
        $new_name);

      
         Post::create([
            'title' =>$request->title,
            'slug' =>Str::slug($request->title),
            'subtitle' =>$request->subtitle,
            'content' =>$request->content,
            'image' =>$new_name,
            'category_id' =>$request->category_id,
            'user_id' => 1,
        ]);
        return redirect()->route('posts.index')
        ->with('success', " Post added succeffuly")
        ->with('type', 'success');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::select(['id', 'name'])->get();
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('categories', 'post'));
    

        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $new_name = $post->image;

        if($request->has('image')){
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = 'post_'.time().'.'.$ex;
            $request->file('image')->move(public_path('upload'),
            $new_name);
        }
       
        //upload the image
      
         Post::find($id)->update([
            'title' =>$request->title,
            
            'subtitle' =>$request->subtitle,
            'content' =>$request->content,
            'image' =>$new_name,
            'category_id' =>$request->category_id,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('posts.index')
        ->with('success', " Post updated succeffuly")
        ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index')
        ->with('success', 'Post deleted succefuly')
        ->with('type', 'danger');
    }
}
