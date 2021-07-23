<?php

namespace Database\Seeders;

use App\Models\SchoolRecord;
use Illuminate\Database\Seeder;

class SchoolRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr =['فصل دراسي', 'عام دراسي', '3 سنوات', '4 سنوات', '5 سنوات', 'حفظ دائم'];

        for($i = 0 ; $i < 6 ; $i++)
        { 
            SchoolRecord::create([
                'type' => $arr[$i], 
          ]); 
        } 
    }
}