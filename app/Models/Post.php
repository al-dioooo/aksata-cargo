<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'content',

        'cover',
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
        return $this->morphMany(Category::class, 'categorizable');
    }

    public function tags()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
