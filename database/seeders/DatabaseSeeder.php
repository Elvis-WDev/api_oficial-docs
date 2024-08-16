<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        // $this->call(CategoriesSeeder::class);
        // $this->call(ArticlesSeeder::class);
        // $this->call(Categories_articles_Seeder::class);
    }
}
