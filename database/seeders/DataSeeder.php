<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Lansia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'kader',
            'email' => 'kader@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Lansia::create([
            'nik' => '123456789',
            'nama' => 'Jian',
            'tinggi_bdn' => '150',
            'berat_bdn' => '50',
            'tensi' => '123456789',
            'gula_darah' => '123456789',
            'asam_urat' => '123456789',
            'kolesterol' => '123456789',
            'alamat' => '123456789'

        ]);
    }   
}
