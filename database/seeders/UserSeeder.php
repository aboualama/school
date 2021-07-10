<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = \App\Models\User::create([
        'name' => 'محمد سعيد',
        'phone' => '0123456789',
        'email' => 'aboualama@gmail.com',
        'status' => 'active',
        'password' => bcrypt('aboualama@gmail.com'),
        'email_verified_at' => now(),
      ]);
  
    //   $user->attachRole('admin');
  
    }
}
