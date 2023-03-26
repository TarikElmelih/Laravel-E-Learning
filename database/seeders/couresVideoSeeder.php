<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class couresVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_videos')->insert([
            'id' => 1,
            'course_id' => 1,
            'url' => 'https://www.youtube.com/watch?v=4RhY1JJgLsM&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=1&ab_channel=Bitfumes',

        ]);
        DB::table('course_videos')->insert([
            'id' => 2,
            'course_id' => 1,
            'url' => 'https://www.youtube.com/watch?v=VnU6KFDGm-w&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=2&ab_channel=Bitfumes',

        ]);
        DB::table('course_videos')->insert([
            'id' => 3,
            'course_id' => 2,
            'url' => 'https://www.youtube.com/watch?v=O_9u1P5YjVc&list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR&ab_channel=TheNetNinja',

        ]);
        DB::table('course_videos')->insert([
            'id' => 4,
            'course_id' => 2,
            'url' => 'https://www.youtube.com/watch?v=YQRmczOYIG0&list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR&index=2&ab_channel=TheNetNinja',

        ]);
    }
}
