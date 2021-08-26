<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\Video::truncate();
    	$vp = [
    		[
    			"playlist_id" => "PLoBcXpennJCv0BzndzujUFDWtEs67_sP3",
    			"video_id" => "LlxsCcw8LYg",
    			"title" => "BERSIKAP DI WILAYAH MAYORITAS NON MUSLIM - Habib Husein Ja'far",
    			"seo_title" => "bersikap-di-wilayah-mayoritas-non-muslim-habib-husein-jafar",
    			"description" => "Berikut adalah pertanyaan dari Sahabat Salaam bagaimana cara bersikap saat menjadi minoritas di kalangan mayoritas beragama lain. Simak penjelasan dari Habib Husein Ja'far Al-Hadar berikut.",
    			"approved_by" => 1,
    			"mq_thumbnail" => "https://i.ytimg.com/vi/LlxsCcw8LYg/mqdefault.jpg",
    			"hq_thumbnail" => "https://i.ytimg.com/vi/LlxsCcw8LYg/hqdefault.jpg",
    			"meta_keywords" => "habib husen, mayoritas muslim",
    			"tgl_upload" => "2020-01-22 15:59:00",
    			"duration" => 300,
    			"click" => 100,
    			"created_by" => 1,
    		],
    		[
    			"playlist_id" => "PLoBcXpennJCtK1jC50vfEyb0AQK7Kjc99",
    			"video_id" => "Ufdg95NN2xs",
    			"title" => "BAGAIMANA MEMILIH PRIORITAS ANTARA ORANG TUA DAN PASANGAN - Ustadz Muslim Bukhori",
    			"seo_title" => "bagaimana-memilih-prioritas-antara-orang-tua-dan-pasangan-ustadz-muslim-bukhori",
    			"description" => "Sahabat Salaam, Kajian kali membahas tentang bagaimana menyikapi ketika kita dihadapkan dengan orang tua dan pasangan, mana yang harus menjad priotitas. Simak penjelasan dari Ustadz Muslim Bukhori di video berikut.",
    			"approved_by" => 1,
    			"mq_thumbnail" => "https://i.ytimg.com/vi/Ufdg95NN2xs/mqdefault.jpg",
    			"hq_thumbnail" => "https://i.ytimg.com/vi/Ufdg95NN2xs/hqdefault.jpg",
    			"meta_keywords" => "memilih prioritas, Ustadz Muslim Bukhori",
    			"tgl_upload" => "2020-01-18 11:45:00",
    			"duration" => 320,
    			"click" => 89,
    			"created_by" => 1,
    		],
    		[
    			"playlist_id" => "PLoBcXpennJCuUJ7Tl4o2zVbhPL3r5IdIz",
    			"video_id" => "Kc8r2gfe9GQ",
    			"title" => "MENGHITUNG ZAKAT FITRAH - Ust. H. Muhammad Nur Hayid",
    			"seo_title" => "menghitung-zakat-fitrah-ust-h-muhammad-nur-hayid",
    			"description" => "Sahabat SALAAM, idul Fitri sebentar lagi, jangan sampai lupa melakukan kewajiban kita untuk membayar zakat fitrah. Berapa besarannya? dan kapan waktu untuk membayarnya? apakah besarannya sama pada saat di zaman Rasul? Simak kajian singkat oleh Ust. H. Muhammad Nur Hayid berikut ini.",
    			"approved_by" => 1,
    			"mq_thumbnail" => "https://i.ytimg.com/vi/Kc8r2gfe9GQ/mqdefault.jpg",
    			"hq_thumbnail" => "https://i.ytimg.com/vi/Kc8r2gfe9GQ/hqdefault.jpg",
    			"meta_keywords" => "menghitung zakat fitrah, Muhammad Nur Hayid",
    			"tgl_upload" => "2021-05-02 08:29:00",
    			"duration" => 410,
    			"click" => 220,
    			"created_by" => 1,
    		],
    		[
    			"playlist_id" => "PLoBcXpennJCusWAWdOPfM2ZbDi0Lbjhp6",
    			"video_id" => "eBGUNC7Mv9w",
    			"title" => "MIMPI BASAH SAAT BERPUASA - Ustadz Najmi Fathoni, M.IK",
    			"seo_title" => "mimpi-basah-saat-berpuasa-ustadz-najmi-fathoni-m-ik",
    			"description" => "Sahabat SALAAM, pernahkah kalian mimpi basah dikala sedang berpuasa Ramadhan? Apakah dapat membatalkan puasa?  Simak kajian singkat oleh Ustadz Najmi Fathoni, M.Ik berikut ini.",
    			"approved_by" => 1,
    			"mq_thumbnail" => "https://i.ytimg.com/vi/eBGUNC7Mv9w/mqdefault.jpg",
    			"hq_thumbnail" => "https://i.ytimg.com/vi/eBGUNC7Mv9w/hqdefault.jpg",
    			"meta_keywords" => "mimpi basah saat berpuasa, najmi fathoni",
    			"tgl_upload" => "2021-05-10 17:10:00",
    			"duration" => 375,
    			"click" => 115,
    			"created_by" => 1,
    		],
    	];
    	foreach($vp as $p) {
    		\App\Models\Video::create([
    			"playlist_id" => $p["playlist_id"],
    			"video_id" => $p["video_id"],
    			"title" => $p["title"],
    			"seo_title" => $p["seo_title"],
    			"description" => $p["description"],
    			"approved_by" => $p["approved_by"],
    			"mq_thumbnail" => $p["mq_thumbnail"],
    			"hq_thumbnail" => $p["hq_thumbnail"],
    			"meta_keywords" => $p["meta_keywords"],
    			"tgl_upload" => $p["tgl_upload"],
    			"duration" => $p["duration"],
    			"click" => $p["click"],
    			"created_by" => $p["created_by"],
    		]);
    	}
    }
}
