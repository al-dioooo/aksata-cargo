<?php

namespace App\Http\Controllers;

use App\Enums\TypeEnum;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::filter(request()->only(['search', 'trashed']))->latest()->paginate(20);

        $data = [
            'categories' => $categories,
            'result' => $categories->count()
        ];

        return Inertia::render('Dashboard/Category/Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = [
            [
                'key' => TypeEnum::Product,
                'label' => TypeEnum::Product->label()
            ],
            [
                'key' => TypeEnum::Post,
                'label' => TypeEnum::Post->label()
            ]
        ];

        $data = [
            'types' => $types
        ];

        return Inertia::render('Dashboard/Category/Create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('dashboard.category.index')->banner('Successfully created a new category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = [
            'category' => $category
        ];

        return Inertia::render('Dashboard/Category/Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('dashboard.category.index')->banner("Successfully updated {$category->name}!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->banner("Successfully deleted {$category->name}!");
    }
}
