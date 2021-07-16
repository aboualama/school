<?php

namespace Database\Seeders;

use App\Models\Year;
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
            $year = Year::create([
              'year' => $i . ' - ' . ($i + 1),
              'default' => '0',   
              'details' => ' لا يوجد تفاصيل اضافية',  
            ]);

        }
        Year::first()->update(['default' => 1]);
    }
}
