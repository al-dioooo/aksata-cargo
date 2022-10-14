<?php

namespace App\Models;

use App\Enums\StatusEnum;
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
        'status',

        'slug',
        'focus_keyword',
        'meta_description'
    ];

    protected $casts = [
        'status' => StatusEnum::class
    ];

    public function categories()
    {
        return $this->morphTo(Category::class, 'categorizable');
    }
}
