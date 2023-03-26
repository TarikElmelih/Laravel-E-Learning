<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            'id' => 1,
            'category_id' => 2,
            'title' => 'Laravel 10 for beginners',
            'duration' => '1h',
            'description' => 'In this Laravel tutorial learn how to integrate Laravel php framework with other technologies & create 10 projects',
            'status' => 'soon',
            'price' => 12,
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'id' => 2,
            'category_id' => 1,
            'title' => 'bootstrap 5',
            'duration' => '12h 35m',
            'description' => 'This tutorial contains hundreds of Bootstrap 5 examples. With our online editor, you can edit the code, and click on a button to view the result',
            'status' => 'in progress',
            'price' => 150,
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'id' => 3,
            'category_id' => 1,
            'title' => 'Next.js 13',
            'duration' => '12h 40m',
            'description' => 'In this course, you will learn about Next.js, a fast and popular framework to build React applications',
            'status' => 'soon',
            'price' => 12,
            'created_at' => now()
        ]);
    }
}
