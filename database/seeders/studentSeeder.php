<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'=>3,
            'name'=>'ErenYega',
            'email'=>'ErenYega@gmail.com',
            'password'=>Hash::make('123456789'),
            'major'=>'non',
            'role'=>'student',
            'status'=>'Active',
            'point'=>100,
            'remain'=>23,
            'picture'=>'th',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'id'=>4,
            'name'=>'Arumin',
            'email'=>'Arumin@gmail.com',
            'password'=>Hash::make('123456789'),
            'major'=>'non',
            'role'=>'student',
            'status'=>'Active',
            'point'=>150,
            'remain'=>150,
            'picture'=>'th',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'id'=>5,
            'name'=>'Yumiru',
            'email'=>'Yumiru@gmail.com',
            'password'=>Hash::make('123456789'),
            'major'=>'non',
            'role'=>'student',
            'status'=>'Active',
            'point'=>125,
            'remain'=>60,
            'picture'=>'th',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'id'=>6,
            'name'=>'Gurisha',
            'email'=>'Gurisha@gmail.com',
            'password'=>Hash::make('123456789'),
            'major'=>'non',
            'role'=>'student',
            'status'=>'Active',
            'point'=>50,
            'remain'=>40,
            'picture'=>'th',
            'created_at' => now()
        ]);
    }
}
