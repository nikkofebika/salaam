<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Item::truncate();
    	\App\Models\Item::create([
    		'user_id' => 2,
    		'name' => 'Dompet',
    		'lost_date' => date('Y-m-d H:i:s'),
    		'item_type_id' => 1,
            'model' => "dompet",
            'tag' => "dompet kulit",
            'color' => "coklat",
    		'images' => '["images\/items\/dompet.jpg"]',
    		'description' => "dompet warna coklat ada ktp nya",
    		'location_id' => 1,
    		'specific_location' => "di bandara Soetta di toiletnya",
    		'province_id' => 36,
    		'regency_id' => 3603,
    		'district_id' => 3603040,
    		'village_id' => 3603040007,
    		'created_at' => date('Y-m-d H:i:s'),
    	]);
    }
}
