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
        Stage::create([
          'name' => 'المرحلة الابتدائية', 
        ]);
        Stage::create([
          'name' => 'المرحلة الاعدادية', 
        ]);
        Stage::create([
          'name' => 'المرحلة الثانوية', 
        ]);
    }
}
  