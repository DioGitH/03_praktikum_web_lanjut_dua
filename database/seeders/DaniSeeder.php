<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dani')->insert([
            'id' => '01',
            'pengalaman_dani' => 'Di perkuliahan selama 4 semester ini saya mempelajari sangat banyak pengalaman,saya yang mulanya sangat minim pengetahuan tentang teknologi dan cara kerja di belakangnya mulai terbuka dan mendapatkan teman sekelas yang sehobi sehingga meningkatkan semangat belajar.'
            ]);
    }
}
