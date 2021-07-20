<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr =['العهدة المستديمة', 'العهدة الفرعية '];

        for($i = 0 ; $i < 2 ; $i++)
        { 
            Category::create([
                'name' => $arr[$i], 
          ]); 
        } 
    }
}
