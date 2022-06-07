<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pegawai::create([
            'nip' => '200046323238',
            'namaPegawai' => 'Iqbal Hario',
            'jenisKelamin' => 'Laki-Laki',
            'alamat' => 'Sidoarjo',
            'noTelp' => '08567732238',
            'idJabatan' => 2,
            'idUser' => 2
        ]);
    }
}
