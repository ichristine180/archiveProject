<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PeriodStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return DB::table('period_structures')->insert([
           ['periodId'=>1,
            'structureId'=>1,
            'total'=>1
        ],
        ['periodId'=>1,
            'structureId'=>2,
            'total'=>10
        ],
        ['periodId'=>1,
            'structureId'=>3,
            'total'=>30
        ],
        ['periodId'=>2,
            'structureId'=>1,
            'total'=>1
        ],
        ['periodId'=>2,
            'structureId'=>2,
            'total'=>10
        ],
        ['periodId'=>2,
            'structureId'=>3,
            'total'=>30
        ],
        ['periodId'=>2,
            'structureId'=>4,
            'total'=>12
        ],
        ['periodId'=>1,
            'structureId'=>2,
            'total'=>10
        ],
        ['periodId'=>1,
            'structureId'=>3,
            'total'=>30
        ],
        ['periodId'=>5,
            'structureId'=>1,
            'total'=>1
        ],
        ['periodId'=>5,
            'structureId'=>5,
            'total'=>10
        ],
        ['periodId'=>5,
            'structureId'=>6,
            'total'=>30
        ],
        ['periodId'=>5,
            'structureId'=>7,
            'total'=>12
        ],
        ]);
    }
}
