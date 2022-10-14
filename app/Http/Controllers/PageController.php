<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index()
    {
        return Inertia::render('Landing');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function service()
    {
        return Inertia::render('Service');
    }

    public function gallery()
    {
        return Inertia::render('Gallery');
    }

    public function blog()
    {
        $posts = Post::with('categories')->get();

        $data = [
            'posts' => $posts
        ];

        return Inertia::render('Blog/Index', $data);
    }

    public function post($slug)
    {
        $post = Post::with('categories')->where('slug', $slug)->firstOrFail();

        $data = [
            'post' => $post
        ];

        return Inertia::render('Blog/Show', $data);
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function shop()
    {
        return Inertia::render('Shop/Index');
    }
}
