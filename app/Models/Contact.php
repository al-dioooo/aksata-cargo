<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'receipt',
        'message'
    ];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "info@aksatacargo.id";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
