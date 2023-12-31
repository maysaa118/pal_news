<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $featured_posts = Post::where('featured', '=', 1)
            ->latest()
            ->take(3)
            ->get();

        $posts = Post::where('featured', '=', 0)
            ->latest()
            ->paginate(15);

        return view('layouts.posts.home', [
            'featured_posts' => $featured_posts,
            'posts' => $posts,
            'pageClass' => 'ss-home',
        ]);
    }
}
