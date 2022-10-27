<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('author', 'category')->filter(request()->only(['search', 'draft', 'trashed']))->latest()->paginate(20);

        $data = [
            'posts' => $posts,
            'result' => $posts->count()
        ];

        return Inertia::render('Dashboard/Post/Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', Post::class)->get();

        $data = [
            'categories' => $categories
        ];

        return Inertia::render('Dashboard/Post/Create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();

        $post->title = $request->input('title');
        $post->subtitle = $request->input('subtitle');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->status = $request->input('status');

        $category = Category::findOrFail($request->input('category_id'));
        $post->category()->associate($category);

        $post->author_id = auth()->user()->id;

        if ($request->file('cover') !== null) {
            $post->cover_path = $request->file('cover')->storePublicly('cover', ['disk' => 'public']);
        }

        $post->save();

        return redirect()->route('dashboard.post.index')->banner('Successfully created a new post!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::get();

        $data = [
            'categories' => $categories,
            'post' => $post
        ];

        return Inertia::render('Dashboard/Post/Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->subtitle = $request->input('subtitle');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->status = $request->input('status');

        $category = Category::findOrFail($request->input('category_id'));
        $post->category()->associate($category);

        $post->author_id = auth()->user()->id;

        if ($request->file('cover') !== null) {
            if ($post->cover_path && file_exists(storage_path($post->cover_path))) {
                unlink(storage_path($post->cover_path));
            }

            $post->cover_path = $request->file('cover')->storePublicly('cover', ['disk' => 'public']);
        }

        $post->save();

        return redirect()->route('dashboard.post.index')->banner('Successfully updated a post!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
