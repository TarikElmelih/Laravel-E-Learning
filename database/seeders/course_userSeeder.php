<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class course_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_user')->insert([
            'id' => 1,
            //laravel
            'course_id' => 1,
            //ErenYega
            'user_id' => 3,
            'created_at' => now()
        ]);
        DB::table('course_user')->insert([
            'id' => 2,
            //laravel
            'course_id' => 1,
            //Arumin
            'user_id' => 4,
            'created_at' => now()
        ]);
        DB::table('course_user')->insert([
            'id' => 3,
            //bootstrap
            'course_id' => 2,
            //Gurisha
            'user_id' => 6,
            'created_at' => now()
        ]);
        DB::table('course_user')->insert([
            'id' => 4,
            //bootstrap
            'course_id' => 2,
            //Yumiru
            'user_id' => 3,
            'created_at' => now()
        ]);
        DB::table('course_user')->insert([
            'id' => 5,
            //bootstrap
            'course_id' => 3,
            //ErenYega
            'user_id' => 3,
            'created_at' => now()
        ]);
    }
}
