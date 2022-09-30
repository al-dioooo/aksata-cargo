<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Builder;
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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('subtitle', 'like', '%' . $search . '%');
        })->when($filters['title'] ?? null, function ($query, $title) {
            $query->where('title', 'like', '%' . $title . '%');
        })->when($filters['subtitle'] ?? null, function ($query, $subtitle) {
            $query->where('subtitle', 'like', '%' . $subtitle . '%');
        })->when($filters['author'] ?? null, function ($query) {
            $query->whereHas('author', function (Builder $q) {
                $q->where('name', 'like', '%' . request('author')  . '%');
            });
        })->when(($filters['from'] ?? null) && ($filters['to'] ?? null), function ($query) {
            $query->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'));
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            $query->withTrashed();
        });
    }
}
