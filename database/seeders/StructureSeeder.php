<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        return DB::table('structures')->insert([
                  ['name'=>'Country',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Prefecture',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Sous Prefecture',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Communes',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Province',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'District',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Sector',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Cellular',
                'created_at' => now(),
                'updated_at' => now()],
                ['name'=>'Village',
                'created_at' => now(),
                'updated_at' => now()],
        ]);
    }
}
