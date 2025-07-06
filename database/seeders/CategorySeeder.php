<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name_category' => 'Fiksi', 'description' => 'Buku fiksi adalah karya sastra yang dibuat berdasarkan imajinasi penulis, bukan berdasarkan fakta atau kejadian nyata.'],
            ['name_category' => 'Non-Fiksi', 'description' => 'Buku non-fiksi adalah karya sastra yang didasarkan pada fakta, data, atau kejadian nyata.'],
            ['name_category' => 'Sains', 'description' => 'Buku sains mencakup berbagai topik ilmiah, seperti biologi, fisika, kimia, dan ilmu bumi.'],
            ['name_category' => 'Teknologi', 'description' => 'Buku teknologi mencakup berbagai inovasi dan perkembangan dalam bidang teknologi.'],
            ['name_category' => 'Sejarah', 'description' => 'Buku sejarah mencakup peristiwa, tokoh, dan perkembangan dalam sejarah manusia.'],
            ['name_category' => 'Biografi', 'description' => 'Buku biografi adalah karya yang menceritakan kehidupan seseorang, biasanya tokoh terkenal.'],
            ['name_category' => 'Pendidikan', 'description' => 'Buku pendidikan mencakup materi pembelajaran dan pengajaran di berbagai bidang.'],
            ['name_category' => 'Komik', 'description' => 'Buku komik adalah karya seni yang menggabungkan gambar dan teks untuk menceritakan sebuah cerita.'],
            ['name_category' => 'Religi', 'description' => 'Buku religi mencakup ajaran, kepercayaan, dan praktik keagamaan dari berbagai agama.'],
            ['name_category' => 'Sastra', 'description' => 'Buku sastra mencakup karya-karya seni tulis yang memiliki nilai estetika dan artistik.'],
        ];

        DB::table('categories')->insert($categories);
    }
}
