<?php

namespace Database\Seeders;

use App\Models\OtherSetting;
use Illuminate\Database\Seeder;

class OtherSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for($i = 1 ; $i < 4 ; $i++) 
        { 
            OtherSetting::create([
                'agents'         => rand(1, 10),
                'administrators' => rand(1, 10),
                'teachers'       => rand(1, 10),
                'users'          => rand(1, 10),
                'guards'         => rand(1, 10),
                'primary_no'     => rand(1111, 999999),
                'middle_no'      => rand(1111, 999999),
                'secondary_no'   => rand(1111, 999999),
                'year_id'        => $i,
            ]); 
        } 
    }
}

