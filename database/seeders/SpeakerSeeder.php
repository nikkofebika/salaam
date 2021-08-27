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
    			"image" => "images/pendakwah/1.png",
    			"description" => "Penceramah & Direktur Akademi Kebudayaan Islam Jakarta",
    			"priority" => 1,
    		],
    		[
    			"name" => "K. H. Cholil Nafis, Lc. Ph.D",
    			"image" => "images/pendakwah/2.png",
    			"description" => "Penceramah & Ketua Dewan Pimpinan Majelis Ulama Indonesia (MUI) 2020-2025",
    			"priority" => 2,
    		],
    		[
    			"name" => "K.H. Abdul Muiz Ali",
    			"image" => "images/pendakwah/3.png",
    			"description" => "Penceramah & Wakil Sekretaris Komisi Fatwa Majelis Ulama Indonesia (MUI) 2020-2025",
    			"priority" => 3,
    		],
    		[
    			"name" => "Ust. H. Muhammad Nur Hayid",
    			"image" => "images/pendakwah/4.png",
    			"description" => "Penceramah & Ketua Pengurus Besar Nahdlatul Ulama (PBNU) 2018-2020",
    			"priority" => 4,
    		],
    		[
    			"name" => "Ustadz M. Najmi Fathoni",
    			"image" => "images/pendakwah/5.png",
    			"description" => "Penceramah & Director Menara Hati International",
    			"priority" => 5,
    		],
    		[
    			"name" => "Ustadz M. Subki Al-Bughury",
    			"image" => "images/pendakwah/6.png",
    			"description" => "Penceramah & Ketua Majlis Dzikir Al-Ma'tsurat Jakarta",
    			"priority" => 6,
    		],
    		[
    			"name" => "Ustadzah Dewi Ani",
    			"image" => "images/pendakwah/7.png",
    			"description" => "Penceramah & Wakil Ketua Lembaga Dakwah Pengurus Besar Nahdlatul Ulama (PBNU) 2018-2020",
    			"priority" => 7,
    		],
    		[
    			"name" => "Ustadzah Badriyah Fayumi",
    			"image" => "images/pendakwah/8.png",
    			"description" => "Penceramah & Wakil Ketua Pengurus Pusat Lembaga Kemaslahatan Keluarga Nahdlatul Ulama (PPLKNU)",
    			"priority" => 8,
    		],
    	];
    	foreach($speakers as $s) {
    		\App\Models\Speaker::create([
    			"name" => $s["name"],
    			"image" => $s["image"],
    			"description" => $s["description"],
    			"priority" => $s["priority"],
    			"approved_by" => 1
    		]);
    	}
    }
}
