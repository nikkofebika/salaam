<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\VideoPlaylist::truncate();
    	$vp = [
    		[
    			"playlist_id" => "PLoBcXpennJCv0BzndzujUFDWtEs67_sP3",
    			"title" => "Habib Husein Ja'far",
    			"seo_title" => "habib-husein-jafar",
    			"priority" => 1,
    			"description" => "Channel Habib Husein Ja'far",
    			"meta_keywords" => "habib husen, habib",
    			"approved_by" => 1,
    			"created_by" => 1,
    		],
    		[
    			"playlist_id" => "PLoBcXpennJCtK1jC50vfEyb0AQK7Kjc99",
    			"title" => "Ustadz Muslim Bukhori",
    			"seo_title" => "ustadz-muslim-bukhori",
    			"priority" => 2,
    			"description" => "Channel Ustadz Muslim Bukhori",
    			"meta_keywords" => "muslim bukhori, ustadz",
    			"approved_by" => 1,
    			"created_by" => 1,
    		],
    		[
    			"playlist_id" => "PLoBcXpennJCuUJ7Tl4o2zVbhPL3r5IdIz",
    			"title" => "Zakat",
    			"seo_title" => "zakat",
    			"priority" => 3,
    			"description" => "Channel Zakat",
    			"meta_keywords" => "zakat, zakat fitrah, zakat maal",
    			"approved_by" => 1,
    			"created_by" => 1,
    		],
    		[
    			"playlist_id" => "PLoBcXpennJCusWAWdOPfM2ZbDi0Lbjhp6",
    			"title" => "Puasa",
    			"seo_title" => "puasa",
    			"priority" => 4,
    			"description" => "Channel puasa",
    			"meta_keywords" => "puasa, puasa wajib, puasa sunnah",
    			"approved_by" => 1,
    			"created_by" => 1,
    		],
    	];
    	foreach($vp as $p) {
    		\App\Models\VideoPlaylist::create([
    			"playlist_id" => $p["playlist_id"],
    			"title" => $p["title"],
    			"seo_title" => $p["seo_title"],
    			"priority" => $p["priority"],
    			"description" => $p["description"],
    			"meta_keywords" => $p["meta_keywords"],
    			"approved_by" => $p["approved_by"],
    			"created_by" => $p["created_by"],
    		]);
    	}
    }
}
