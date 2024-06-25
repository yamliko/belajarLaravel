<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'pegawai_nama' => 'John Doe',
                'pegawai_jabatan' => 'Manager',
                'pegawai_umur' => 35,
                'pegawai_alamat' => '123 Main Street',
            ],
            [
                'pegawai_nama' => 'Jane Smith',
                'pegawai_jabatan' => 'Developer',
                'pegawai_umur' => 28,
                'pegawai_alamat' => '456 Elm Street',
            ],
            [
                'pegawai_nama' => 'Alice Johnson',
                'pegawai_jabatan' => 'Designer',
                'pegawai_umur' => 30,
                'pegawai_alamat' => '789 Oak Avenue',
            ],
            // Add more predefined records as needed
        ];

        DB::table('pegawai')->insert($data);
    }
}