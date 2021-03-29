<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TimeLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return DB::table('time_lines')->insert([
            [
                'startYear'=>1960,
                'endYear'=>1963,
                'created_at' => now(),
                 'updated_at' => now()
            ],
            [
                'startYear'=>1964,
                'endYear'=>1994,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'startYear'=>1995,
                'endYear'=>2000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'startYear'=>2001,
                'endYear'=>2005,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'startYear'=>2006,
                'endYear'=>2020,
                'created_at' => now(),
                 'updated_at' => now()
            ],

        ]);
    }
}
