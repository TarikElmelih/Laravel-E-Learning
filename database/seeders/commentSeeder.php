<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //comment on laravel couse
        DB::table('comments')->insert([
            'id' => 1,
            //ErenYega
            'user_id' => 3,
            'course_id' => 1,
            'body' => 'I regret to say that the course did not live up to my expectations, and I am disappointed with the quality of the content and teaching.',
            'stars' => 0,
            'created_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 3,
            //Arumin
            'user_id' => 4,
            'course_id' => 1,
            'body' => 'If you re looking to learn Laravel, this course is your guy. It\'s pretty dope.',
            'stars' => 5,
            'created_at' => now()
        ]);

        //comment on bootstrap 5
        DB::table('comments')->insert([
            'id' => 2,
            //Yumiru
            'user_id' => 6,
            'course_id' => 2,
            'body' => 'The course is beneficial, but there is room for improvement.',
            'stars' => 4,
            'created_at' => now()
        ]);

        DB::table('comments')->insert([
            'id' => 4,
            //Gurisha
            'user_id' => 5,
            'course_id' => 2,
            'body' => 'All aspects of this project have been rated at the highest level.',
            'stars' => 5,
            'created_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 5,
            //ErenYega
            'user_id' => 3,
            'course_id' => 2,
            'body' => 'This course is not meeting my expectations.',
            'stars' => 5,
            'created_at' => now()
        ]);
    }
}
