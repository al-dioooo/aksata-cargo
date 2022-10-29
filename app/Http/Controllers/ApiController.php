<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function slug(Request $request)
    {
        $slug = Str::slug($request->query('text'));

        return $slug;
    }

    public function product()
    {
        if (request()->query('category')) {
            $category = Category::where('slug', request()->query('category'))->first();

            $products = Product::with('category')->where('category_id', $category->id)->latest()->get();
        } else {
            $products = Product::with('category')->latest()->get();
        }

        return $products;
    }

    public function category()
    {
        $category = Category::latest()->get();

        return $category;
    }
}
