<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'user_id' => 1,
                'title' => 'articulo 1',
                'description' => 'Intrinsicly maximize unique infomediaries without an expanded array of mindshare. Credibly disseminate resource sucking customer service through functionalized schemas.',
                'content' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'title' => 'articulo 1',
                'description' => 'Intrinsicly maximize unique infomediaries without an expanded array of mindshare. Credibly disseminate resource sucking customer service through functionalized schemas.',
                'content' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id' => 3,
                'title' => 'articulo 1',
                'description' => 'Intrinsicly maximize unique infomediaries without an expanded array of mindshare. Credibly disseminate resource sucking customer service through functionalized schemas.',
                'content' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}