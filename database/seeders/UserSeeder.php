<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'level' => 'Admin'
        ]);

        User::create([
            'name' => 'Iqbal Hario',
            'email' => 'rio@admin.com',
            'password' => bcrypt('12345678'),
            'level' => 'Pegawai'
        ]);
    }
}
