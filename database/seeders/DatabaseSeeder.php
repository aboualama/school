<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class); 
        $this->call(SettingTableSeeder::class); 
        $this->call(YearSeeder::class); 
        $this->call(OtherSettingSeeder::class); 
        $this->call(StageSeeder::class); 
        $this->call(ClassRoomSeeder::class); 
        $this->call(StudentCountSeeder::class); 
        $this->call(CategorySeeder::class); 
        $this->call(CustodyTypeSeeder::class); 
        $this->call(SchoolRecordSeeder::class); 
        $this->call(SchoolRecordTypeSeeder::class); 

        
    }
}  
  