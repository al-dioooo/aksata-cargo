<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function slug(Request $request)
    {
        $slug = Str::slug($request->query('text'));

        return $slug;
    }
}
