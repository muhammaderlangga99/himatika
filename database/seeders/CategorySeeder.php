<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Tutorial',
            'slug' => Str::slug('Tutorial'),
            'description' => fake()->paragraph(random_int(1, 3)),
            'image' => fake()->imageUrl(640, 480, 'cats'),
            'color' => 'purple',
        ]);

        Category::create([
            'name' => 'News',
            'slug' => Str::slug('News'),
            'description' => fake()->paragraph(random_int(1, 3)),
            'image' => fake()->imageUrl(640, 480, 'cats'),
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Activities',
            'slug' => Str::slug('Article'),
            'description' => fake()->sentence(10),
            'image' => fake()->imageUrl(640, 480, 'cats'),
            'color' => 'blue',
        ]);
    }
}
