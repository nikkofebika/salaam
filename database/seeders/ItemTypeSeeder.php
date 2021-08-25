<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ItemType::truncate();
        $it = ["Motor","Laptop","Mobil","Handphone","Jam Tangan","Jaket"];
    	foreach($it as $l) {
    		\App\Models\ItemType::create([
    			"name" => $l
    		]);
    	}
    }
}
