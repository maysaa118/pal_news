<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();

       
        $prevPost = Post::where('id', '<', $post->id)
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->first();

        $nextPost = Post::where('id', '>', $post->id)
            ->orderBy('id', 'ASC')
            ->limit(1)
            ->first();

        return view('layouts.posts.show', [
            'post' => $post,
            'prevPost' => $prevPost,
            'nextPost' => $nextPost,
        ]);
    }
}
