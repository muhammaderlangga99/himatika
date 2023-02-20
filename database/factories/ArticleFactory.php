<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(random_int(3, 5));
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'excerpt' => fake()->paragraph(random_int(1, 3)),
            'thumbnail' => fake()->imageUrl(640, 480),
            'body' => collect(fake()->paragraphs(random_int(10, 20)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'user_id' => random_int(1, 30),
            'category_id' => random_int(1, 3),
        ];
    }
}
