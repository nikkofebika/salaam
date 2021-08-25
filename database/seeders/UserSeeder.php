<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\User::truncate();
    	\App\Models\User::create([
    		'name' => 'admin',
    		'email' => 'admin@gmail.com',
    		'password' => Hash::make(12345678),
    		'phone' => "088888888888",
            'village_id' => 3603040007,
            'address' => "Rumah Admin",
            'is_admin' => true,
    		'is_active' => true
    	]);
    	\App\Models\User::create([
    		'name' => 'nikko',
    		'email' => 'nikko@gmail.com',
    		'password' => Hash::make(12345678),
            'phone' => "085691977176",
            'village_id' => 3603040007,
            'address' => "Graha Lestari Tangerang",
    		'is_admin' => false,
    		'is_active' => true
    	]);
    }
}
