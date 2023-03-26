<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id'=>1,
            'title'=>'web design',
            'created_at'=>now()
        ]);
        DB::table('categories')->insert([
            'id'=>2,
            'title'=>'web development',
            'created_at'=>now()
        ]);
        DB::table('categories')->insert([
            'id'=>3,
            'title'=>'android app',
            'created_at'=>now()
        ]);
    }
}
