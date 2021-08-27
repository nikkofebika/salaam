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
            'is_admin' => true,
            'approved_by' => 1
        ]);
    }
}
