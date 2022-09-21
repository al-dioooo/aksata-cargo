<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',

        'price',
        'discount',
        'stock',

        'photo',

        'slug',
        'focus_keyword',
        'meta_description'
    ];

    public function categories()
    {
        return $this->morphMany(Category::class, 'categorizable');
    }

    public function tags()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }
}
