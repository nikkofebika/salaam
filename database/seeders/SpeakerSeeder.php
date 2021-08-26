<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\Speaker::truncate();
    	$speakers = [
    		[
    			"name" => "Habib Husein Ja'far Al-Hadar",
    			"image" => "1.png",
    			"description" => "Penceramah & Direktur Akademi Kebudayaan Islam Jakarta",
    		],
    		[
    			"name" => "K. H. Cholil Nafis, Lc. Ph.D",
    			"image" => "2.png",
    			"description" => "Penceramah & Ketua Dewan Pimpinan Majelis Ulama Indonesia (MUI) 2020-2025",
    		],
    		[
    			"name" => "K.H. Abdul Muiz Ali",
    			"image" => "3.png",
    			"description" => "Penceramah & Wakil Sekretaris Komisi Fatwa Majelis Ulama Indonesia (MUI) 2020-2025",
    		],
    		[
    			"name" => "Ust. H. Muhammad Nur Hayid",
    			"image" => "4.png",
    			"description" => "Penceramah & Ketua Pengurus Besar Nahdlatul Ulama (PBNU) 2018-2020",
    		],
    		[
    			"name" => "Ustadz M. Najmi Fathoni",
    			"image" => "5.png",
    			"description" => "Penceramah & Director Menara Hati International",
    		],
    		[
    			"name" => "Ustadz M. Subki Al-Bughury",
    			"image" => "6.png",
    			"description" => "Penceramah & Ketua Majlis Dzikir Al-Ma'tsurat Jakarta",
    		],
    		[
    			"name" => "Ustadzah Dewi Ani",
    			"image" => "7.png",
    			"description" => "Penceramah & Wakil Ketua Lembaga Dakwah Pengurus Besar Nahdlatul Ulama (PBNU) 2018-2020",
    		],
    		[
    			"name" => "Ustadzah Badriyah Fayumi",
    			"image" => "8.png",
    			"description" => "Penceramah & Wakil Ketua Pengurus Pusat Lembaga Kemaslahatan Keluarga Nahdlatul Ulama (PPLKNU)",
    		],
    	];
    	foreach($speakers as $s) {
    		\App\Models\Speaker::create([
    			"name" => $s["name"],
    			"image" => $s["image"],
    			"description" => $s["description"],
    			"is_active" => 1
    		]);
    	}
    }
}
