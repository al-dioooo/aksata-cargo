<?php

namespace App\Http\Controllers;

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
        return Inertia::render('Service/Index');
    }

    public function blog()
    {
        return Inertia::render('Blog/Index');
    }

    public function shop()
    {
        return Inertia::render('Shop/Index');
    }
}
