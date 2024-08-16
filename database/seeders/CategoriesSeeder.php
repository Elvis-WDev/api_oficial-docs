<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'user_id' => 1,
                'name' => 'category 1',
                'description' => 'Get started fast with installation and theme setup instructions',
                'icon' => 'appstore',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'name' => 'category 2',
                'description' => 'Get started fast with installation and theme setup instructions',
                'icon' => 'blackberry',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'name' => 'category 3',
                'description' => 'Get started fast with installation and theme setup instructions',
                'icon' => 'cisco',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'name' => 'category 4',
                'description' => 'Get started fast with installation and theme setup instructions',
                'icon' => 'debian',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'name' => 'category 1',
                'description' => 'Get started fast with installation and theme setup instructions',
                'icon' => 'Apple',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 3,
                'name' => 'category 1',
                'description' => 'Get started fast with installation and theme setup instructions',
                'icon' => 'Apple',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],

        ]);
    }
}