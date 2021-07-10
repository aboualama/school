<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1440 ; $i < 1461 ; $i++)
        {
            $year = \App\Models\Year::create([
              'year' => $i, 
              'details' => ' لا يوجد تفاصيل اضافية',  
            ]);

        }
    }
}
