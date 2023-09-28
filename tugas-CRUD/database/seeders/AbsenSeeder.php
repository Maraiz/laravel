<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('absens')->insert([
            'nama' => 'Maulana Nurfaizi Anugerah',
            'nim' => '362258302197',
            'foto' => 'jpg'
        ]);
    }
}
