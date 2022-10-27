<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'content',

        'category_id',

        'cover_path',
        'status',

        'slug'
    ];

    protected $casts = [
        'status' => StatusEnum::class
    ];

    protected $appends = [
        'cover'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('type', static::class);
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
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } else if ($trashed === 'only') {
                $query->onlyTrashed();
            }
        })->when($filters['draft'] ?? null, function ($query, $archived) {
            if ($archived === 'with') {
                $query->where('status', 'draft')->orWhere('status', 'published');
            } else if ($archived === 'only') {
                $query->where('status', 'draft');
            } else {
                $query->where('status', 'published');
            }
        }, function ($query) {
            $query->where('status', 'published');
        });
    }

    public function getCreatedAtAttribute($value)
    {
        if ($value != null) {
            return Carbon::parse($value)->isoFormat('D MMMM YYYY');
        }
    }

    public function getUpdatedAtAttribute($value)
    {
        if ($value != null) {
            return Carbon::parse($value)->isoFormat('D MMMM YYYY');
        }
    }

    public function getCoverAttribute()
    {
        return $this->cover_path ? Storage::disk('public')->url($this->cover_path) : null;
    }
}
