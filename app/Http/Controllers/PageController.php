<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
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

    public function register()
    {
        return Inertia::render('Register');
    }

    public function blog()
    {
        $posts = Post::with('category')->get();

        $data = [
            'posts' => $posts
        ];

        return Inertia::render('Blog/Index', $data);
    }

    public function post($slug)
    {
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();

        $data = [
            'post' => $post
        ];

        return Inertia::render('Blog/Show', $data);
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function message(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return redirect()->back()->banner('Thank you for contact us! We will contact you shortly.');
    }

    public function shop()
    {
        $products = Product::with('category')->get();

        $data = [
            'products' => $products
        ];

        return Inertia::render('Shop/Index', $data);
    }
}
