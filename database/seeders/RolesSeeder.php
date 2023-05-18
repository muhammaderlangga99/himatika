<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            "role_name" => "admin"
        ]);

        Roles::create([
            "role_name" => "user"
        ]);

        Roles::create([
            "role_name" => "guest"
        ]);
    }
}
