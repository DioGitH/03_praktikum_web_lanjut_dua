<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableDioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_dios')->insert([
            'nama' => 'Maulidio Farhan Rizkullah',
            'pengalaman' => 'selama di perkuliahan, saya mempelajari banyak bahasa pemrograman.'
        ]);
    }
}
