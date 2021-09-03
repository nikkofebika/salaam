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
                "playlist_id" => "PLoBcXpennJCuwFvu_U1J1-7B6_Myg3WY0",
                "title" => "K.H. Abdul Muiz Ali",
                "seo_title" => "kh-abdul-muiz-ali",
                "priority" => 1,
                "description" => "Channel K.H. Abdul Muiz Ali",
                "meta_keywords" => "K.H. Abdul Muiz Ali",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCv6ikPqWmrdoGRN5ILwWpzr",
                "title" => "K.H. M. Cholil Nafis, LC, Ph.D",
                "seo_title" => "kh-m-cholil-nafis-lc-phd",
                "priority" => 2,
                "description" => "Channel K.H. M. Cholil Nafis, LC, Ph.D",
                "meta_keywords" => "Cholil Nafis",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCuViU-hElZKFdldVDYKWVkk",
                "title" => "Ustadzah Dewi Ani",
                "seo_title" => "ustadzah-dewi-ani",
                "priority" => 3,
                "description" => "Channel Ustadzah Dewi Ani",
                "meta_keywords" => "Ustadzah Dewi Ani",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCs7LSVZG-tQB_4t6mL5Ou9l",
                "title" => "Ustadz Najmi Fathoni, M.IK",
                "seo_title" => "ustadz-najmi-Fathoni-mik",
                "priority" => 4,
                "description" => "Channel Ustadz Najmi Fathoni, M.IK",
                "meta_keywords" => "Ustadz Najmi Fathoni",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCv0BzndzujUFDWtEs67_sP3",
                "title" => "Habib Husein Ja'far",
                "seo_title" => "habib-husein-jafar",
                "priority" => 5,
                "description" => "Channel Habib Husein Ja'far",
                "meta_keywords" => "habib husen, habib",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCtnPbRB7deQm0Noud_c8sow",
                "title" => "Ust. H. Muhammad Nur Hayid",
                "seo_title" => "ust-h-muhammad-nur-hayid",
                "priority" => 6,
                "description" => "Channel Ust. H. Muhammad Nur Hayid",
                "meta_keywords" => "Muhammad Nur Hayid",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCvEbBQZXZxxSAY2Zi-k0Cpx",
                "title" => "Ustadzah Inarotul Ain",
                "seo_title" => "ustadzah-inarotul-ain",
                "priority" => 7,
                "description" => "Channel Ustadzah Inarotul Ain",
                "meta_keywords" => "Ustadzah Inarotul Ain",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCviIOCcJI3WG73EE2HqRLo6",
                "title" => "Ustadzah Badriyah Fayumi",
                "seo_title" => "ustadzah-badriyah-fayumi",
                "priority" => 8,
                "description" => "Channel Ustadzah Badriyah Fayumi",
                "meta_keywords" => "Ustadzah Badriyah Fayumi",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCsUQHOJPkOsGx_tHg2_m6Zy",
                "title" => "Ustadz Subki Al-Bughury",
                "seo_title" => "ustadz-subki-al-bughury",
                "priority" => 9,
                "description" => "Channel Ustadz Subki Al-Bughury",
                "meta_keywords" => "Ustadz Subki Al-Bughury",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCtK1jC50vfEyb0AQK7Kjc99",
                "title" => "Ustadz Muslim Bukhori",
                "seo_title" => "ustadz-muslim-bukhori",
                "priority" => 10,
                "description" => "Channel Ustadz Muslim Bukhori",
                "meta_keywords" => "muslim bukhori, ustadz",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCsSWTtColWL3rroBR258MDT",
                "title" => "K.H Mukti Ali Qusyairi M.A",
                "seo_title" => "kh-mukti-ali-qusyairi-ma",
                "priority" => 11,
                "description" => "Channel K.H Mukti Ali Qusyairi M.A",
                "meta_keywords" => "K.H Mukti Ali Qusyairi M.A",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCvU1QsM0gpoIKNy5-Es3ph4",
                "title" => "K.H Misbahul Munir Kholil M.A",
                "seo_title" => "kh-misbahul-munir-kholil-ma",
                "priority" => 12,
                "description" => "Channel K.H Misbahul Munir Kholil M.A",
                "meta_keywords" => "K.H Misbahul Munir Kholil M.A",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCuUJ7Tl4o2zVbhPL3r5IdIz",
                "title" => "Zakat",
                "seo_title" => "zakat",
                "priority" => 13,
                "description" => "Channel Zakat",
                "meta_keywords" => "zakat, zakat fitrah, zakat maal",
                "approved_by" => 1,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCusWAWdOPfM2ZbDi0Lbjhp6",
                "title" => "Puasa",
                "seo_title" => "puasa",
                "priority" => 14,
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
