<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'creator'])->filter(request()->only(['search', 'draft', 'trashed']))->latest()->paginate(20);

        $data = [
            'products' => $products,
            'result' => $products->count()
        ];

        return Inertia::render('Dashboard/Product/Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', Product::class)->get();

        $data = [
            'categories' => $categories
        ];

        return Inertia::render('Dashboard/Product/Create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->slug = $request->input('slug');
        $product->status = $request->input('status');

        $category = Category::findOrFail($request->input('category_id'));
        $product->category()->associate($category);

        $product->created_by = auth()->user()->id;

        if ($request->file('photo') !== null) {
            $product->photo_path = $request->file('photo')->storePublicly('photo', ['disk' => 'public']);
        }

        $product->save();

        return redirect()->route('dashboard.product.index')->banner('Successfully created a new product!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
