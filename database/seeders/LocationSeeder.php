<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Models\Location::truncate();
        $locations = ["Bandara","Stasiun","Terminal","Rumah Sakit","Puskesmas","Lapangan"];
    	foreach($locations as $l) { 
    		\App\Models\Location::create([
    			"name" => $l
    		]);
    	}
    }
}
