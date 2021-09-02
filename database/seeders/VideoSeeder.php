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
    			"playlist_id" => "PLoBcXpennJCuwFvu_U1J1-7B6_Myg3WY0",
    			"video_id" => "M18ydEnKTfo",
    			"title" => "MASIH BISAKAH SOLAT SUBUH JIKA KESIANGAN",
    			"seo_title" => "masih-bisakah-solat-subuh-jika-kesiangan",
    			"description" => "Sering bangun kesiangan dan belum sholat subuh? Simak kajian singkat oleh K.H Abdul Muiz Ali berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
    			"approved_by" => 1,
    			"mq_thumbnail" => "https://i.ytimg.com/vi/M18ydEnKTfo/mqdefault.jpg",
    			"hq_thumbnail" => "https://i.ytimg.com/vi/M18ydEnKTfo/hqdefault.jpg",
    			"meta_keywords" => "MASIH BISAKAH SOLAT SUBUH JIKA KESIANGAN",
    			"tgl_upload" => "2020-01-22 15:59:00",
    			"duration" => 300,
    			"click" => 100,
    			"created_by" => 1,
    		],[
                "playlist_id" => "PLoBcXpennJCuwFvu_U1J1-7B6_Myg3WY0",
                "video_id" => "KXmnFLPjv2Q",
                "title" => "HARUSKAH BERWUDHU KETIKA SUDAH MANDI",
                "seo_title" => "haruskah-berwudhu-ketika-sudah-mandi",
                "description" => "Apakah kita harus kembali berwudhu setelah mandi? bagaimana hukumnya secara fiqih? Simak kajian singkat oleh K.H Abdul Muiz Ali berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/KXmnFLPjv2Q/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/KXmnFLPjv2Q/hqdefault.jpg",
                "meta_keywords" => "HARUSKAH BERWUDHU KETIKA SUDAH MANDI",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCv6ikPqWmrdoGRN5ILwWpzr",
                "video_id" => "aSObj133FRM",
                "title" => "TIPS MENGHADAPI ORANG NYINYIR DI MEDIA SOSIAL",
                "seo_title" => str_replace(' ', '-', strtolower("TIPS MENGHADAPI ORANG NYINYIR DI MEDIA SOSIAL")),
                "description" => "Bagaimana tips menghadapi postingan nyinyir di media sosial? Simak kajian singkat oleh K.H. M. Cholil Nafis, LC, Ph.D berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/aSObj133FRM/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/aSObj133FRM/hqdefault.jpg",
                "meta_keywords" => "TIPS MENGHADAPI ORANG NYINYIR DI MEDIA SOSIAL",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
                "created_by" => 1,
            ],[
                "playlist_id" => "PLoBcXpennJCv6ikPqWmrdoGRN5ILwWpzr",
                "video_id" => "iClvVL23-VQ",
                "title" => "PACARAN DALAM ISLAM",
                "seo_title" => str_replace(' ', '-', strtolower("PACARAN DALAM ISLAM")),
                "description" => "Apakah kita harus kembali berwudhu setelah mandi? bagaimana hukumnya secara fiqih? Simak kajian singkat oleh K.H Abdul Muiz Ali berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/iClvVL23-VQ/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/iClvVL23-VQ/hqdefault.jpg",
                "meta_keywords" => "PACARAN DALAM ISLAM",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCuViU-hElZKFdldVDYKWVkk",
                "video_id" => "aoor_RYI-TI",
                "title" => "PUASA TAPI TIDAK SHALAT",
                "seo_title" => str_replace(' ', '-', strtolower("PUASA TAPI TIDAK SHALAT")),
                "description" => "Sahabat SALAAM, bagaimana jika sahabat berpuasa namun tidak sholat? apakah tetap sah puasanya? Simak kajian singkat oleh Ustadzah Dewi Ani berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/aoor_RYI-TI/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/aoor_RYI-TI/hqdefault.jpg",
                "meta_keywords" => "PUASA TAPI TIDAK SHALAT",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
                "created_by" => 1,
            ],[
                "playlist_id" => "PLoBcXpennJCuViU-hElZKFdldVDYKWVkk",
                "video_id" => "u9QWz91nTR4",
                "title" => "MENCIUM PASANGAN SAAT PUASA",
                "seo_title" => str_replace(' ', '-', strtolower("MENCIUM PASANGAN SAAT PUASA")),
                "description" => "Untuk sahabat SALAAM yang sudah menikah, bolehkah mencium pasangan saat bulan puasa Ramadhan? Simak kajian singkat oleh Ustadzah Dewi Ani berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/u9QWz91nTR4/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/u9QWz91nTR4/hqdefault.jpg",
                "meta_keywords" => "MENCIUM PASANGAN SAAT PUASA",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
                "created_by" => 1,
            ],
            [
                "playlist_id" => "PLoBcXpennJCs7LSVZG-tQB_4t6mL5Ou9l",
                "video_id" => "GDarAzwIJW4",
                "title" => "SHALAT DALAM KENDARAAN",
                "seo_title" => str_replace(' ', '-', strtolower("SHALAT DALAM KENDARAAN")),
                "description" => "Pernahkah sahabat SALAAM terjebak dalam kemacetan di saat waktu sholat? Apalagi waktu sholatnya pendek seperti dari Ashar ke Maghrib atau Maghrib ke Isya. Bolehkah kita melakukan sholat di dalam kendaraan atau ketika sedang menyetir? Simak kajian singkat oleh Ustadz Najmi Fathoni, M.IK berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/GDarAzwIJW4/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/GDarAzwIJW4/hqdefault.jpg",
                "meta_keywords" => "SHALAT DALAM KENDARAAN",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
                "created_by" => 1,
            ],[
                "playlist_id" => "PLoBcXpennJCs7LSVZG-tQB_4t6mL5Ou9l",
                "video_id" => "QVwXXrFmnvQ",
                "title" => "TATA CARA ZIARAH KUBUR",
                "seo_title" => str_replace(' ', '-', strtolower("TATA CARA ZIARAH KUBUR")),
                "description" => "Sahabat SALAAM yang mempunyai keluarga atau kerabat yang sudah meninggal, pasti dalam beberapa bulan sekali sahabat mengunjungi kuburannya atau melakukan ziarah. Namun sudah benarkah tata cara yang sahabat lakukan? Simak kajian singkat oleh Ustadz Najmi Fathoni, M.IK berikut ini. Salaam indonesia adalah sebuah kanal media dakwah dan belajar tentang islam yang penuh dengan cinta dan keindahan.",
                "approved_by" => 1,
                "mq_thumbnail" => "https://i.ytimg.com/vi/QVwXXrFmnvQ/mqdefault.jpg",
                "hq_thumbnail" => "https://i.ytimg.com/vi/QVwXXrFmnvQ/hqdefault.jpg",
                "meta_keywords" => "TATA CARA ZIARAH KUBUR",
                "tgl_upload" => "2020-01-22 15:59:00",
                "duration" => 300,
                "click" => 100,
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
