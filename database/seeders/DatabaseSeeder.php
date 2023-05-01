<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();

        Article::factory(40)->create();

        User::create([
            'name' => 'Sonia R. I',
            'email' => 'sonia@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('muhammad'), // password
            'instagram' => 'soniariffanti',
            'github' => 'soniariffanti',
        ]);

        User::create([
            'name' => 'Putri Nugrahayati',
            'email' => 'putri@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('muhammad'), // password
            'instagram' => 'putriweb',
            'github' => 'putriweb',
        ]);

        // call seeder category
        $this->call([
            CategorySeeder::class,
        ]);
    }
}
