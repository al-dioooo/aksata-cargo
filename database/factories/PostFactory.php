<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use MarkSitko\LaravelUnsplash\Facades\Unsplash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(3);
        $photo = Unsplash::randomPhoto()
            ->store();

        return [
            'author_id' => 1,

            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),

            'cover_path' => $photo,

            'status' => $this->faker->randomElement(StatusEnum::cases()),

            'slug' => Str::slug($title)
        ];
    }
}
