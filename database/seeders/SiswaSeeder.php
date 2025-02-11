<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            'nama' => 'Alung',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Jambewangi',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Dimas',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Glenmore',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Daus',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Sempu',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Nanta',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Sempu',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Fahris',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Awu-Awu',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Farel',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Jayengan',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Alhan',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Parastembok',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Jeki',
            'kelas' => 'XII',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Ampelan',
        ]);
    }
}
