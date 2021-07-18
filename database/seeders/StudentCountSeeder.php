<?php

namespace Database\Seeders;

use App\Models\StudentCount;
use Illuminate\Database\Seeder;

class StudentCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i < 3 ; $i++) 
        { 
            for($j = 1 ; $j < 13 ; $j++) 
            { 
                StudentCount::create([ 
                    'count'         => rand(45, 65),
                    'class_room_id' => $j,
                    'year_id'       => $i,
                ]); 
            } 
        } 
    }
}
 