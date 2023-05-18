<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;
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
            'roles' => 'guest',
            'email' => 'sonia@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('muhammad'), // password
            'instagram' => 'soniariffanti',
            'github' => 'soniariffanti',
        ]);

        User::create([
            'name' => 'Putri Nugrahayati',
            'roles' => 'guest',
            'email' => 'putri@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('muhammad'), // password
            'instagram' => 'putriweb',
            'github' => 'putriweb',
        ]);

        User::create([
            'name' => 'Muhammad Erlangga',
            'roles' => 'admin',
            'email' => 'muhammaderlangga@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('muhammad'), // password
            'instagram' => 'muhammaderlangga99',
            'github' => 'muhammaderlangga99',
            'bio' => 'Developer dari website himatika',
        ]);

        // call seeder category
        $this->call([
            CategorySeeder::class,
        ]);

        // call seeder roles
        $this->call([
            RolesSeeder::class,
        ]);
    }
}
