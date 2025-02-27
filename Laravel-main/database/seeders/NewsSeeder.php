<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            ['title' => 'Title 1', 'content' => 'Content 1'],
            ['title' => 'Title 2', 'content' => 'Content 3'],
            ['title' => 'Title 3', 'content' => 'Content 2'],

        ]);
    }
}
