<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'=>1,
            'name'=>'tarek',
            'email'=>'tarek@gmail.com',
            'password'=>Hash::make('123456789'),
            'major'=>'non',
            'role'=>'SuperAdmin',
            'status'=>'Active',
            'point'=>0,
            'remain'=>0,
            'picture'=>'th',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'id'=>2,
            'name'=>'Yagami Raito',
            'email'=>'YagamiRaito@gmail.com',
            'password'=>Hash::make('123456789'),
            'major'=>'non',
            'role'=>'Admin',
            'status'=>'Active',
            'point'=>0,
            'remain'=>0,
            'picture'=>'th',
            'created_at' => now()

        ]);
    }
}
