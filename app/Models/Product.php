<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',

        'price',

        'photo_path',
        'status',

        'slug'
    ];

    protected $casts = [
        'status' => StatusEnum::class
    ];

    protected $appends = [
        'photo'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('type', static::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
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

    public function getPhotoAttribute()
    {
        return $this->photo_path ? Storage::disk('public')->url($this->photo_path) : null;
    }
}
