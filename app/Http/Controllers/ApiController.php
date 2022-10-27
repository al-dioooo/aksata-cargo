<?php

namespace App\Http\Controllers;

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
        $products = Product::with('category')->get();

        return $products;
    }
}
