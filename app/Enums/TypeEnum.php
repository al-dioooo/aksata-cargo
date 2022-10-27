<?php

namespace App\Enums;

use App\Models\Post;
use App\Models\Product;

enum TypeEnum: string
{
    case Product = Product::class;
    case Post = Post::class;

    public function label(): string
    {
        return static::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            TypeEnum::Product => 'Product',
            TypeEnum::Post => 'Post',
        };
    }
}
