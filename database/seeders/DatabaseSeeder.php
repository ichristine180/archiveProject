<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call([TimeLineSeeder::class]);
       // $this->call([StructureSeeder::class]);
        $this->call([PeriodStructureSeeder::class]);
    }
}
