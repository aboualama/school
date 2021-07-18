<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr =['المرحلة الابتدائية','المرحلة الاعدادية', 'المرحلة الثانوية'];

        for($i = 0 ; $i < 3 ; $i++)
        { 
          Stage::create([
            'name' => $arr[$i], 
          ]); 
        } 
    }
}
  