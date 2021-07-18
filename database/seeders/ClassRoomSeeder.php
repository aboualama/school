<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr1 =[ 'الصف الاول الابتدائي', 'الصف الثاني الابتدائي', 'الصف الثالث الابتدائي', 'الصف الرابع الابتدائي', 'الصف الخامس الابتدائي', 'الصف السادس الابتدائي'];
        $arr2 =[ 'الصف الاول الاعدادي', 'الصف الثاني الاعدادي', 'الصف الثالث الاعدادي'];
        $arr3 =[ 'الصف الاول الثانوي', 'الصف الثاني الثانوي', 'الصف الثالث الثانوي'];

        for($i = 0 ; $i < 6 ; $i++)
        { 
            ClassRoom::create([
                'classroom' => $arr1[$i], 
                'stage_id' => 1, 
            ]); 
        } 
        for($i = 0 ; $i < 3 ; $i++)
        { 
            ClassRoom::create([
                'classroom' => $arr2[$i], 
                'stage_id' => 2, 
            ]); 
        } 
        for($i = 0 ; $i < 3 ; $i++)
        { 
            ClassRoom::create([
                'classroom' => $arr3[$i], 
                'stage_id' => 3, 
            ]); 
        } 
    }
}
 