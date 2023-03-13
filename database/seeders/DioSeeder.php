<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dio')->insert([
            'id' => '01',
            'pengalaman_dio' => 'selama di perkuliahan, saya mempelajari banyak hal mulai dari belajar pemrograman. berorganisasi hingga belajar hal hal kecil seperti ke disiplinan dll'
            ]);
    }
}
