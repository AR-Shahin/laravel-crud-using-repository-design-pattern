<?php

namespace Database\Seeders;

use Faker;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => Str::random(),
                'slug' => Str::random(),
            ]);
        }
    }
}
