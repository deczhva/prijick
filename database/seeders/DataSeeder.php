<?php

namespace Database\Seeders;

use App\Models\Balita;
use App\Models\User;
use App\Models\Lansia;
use App\Models\NewMember;
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
            'email' => 'kader@gmail.com',
            'password' => bcrypt('password')
        ]);

        NewMember::create([
            'nama' => 'anya forger',
            'alamat' => 'jl. cakrawala depok baru',
            'nama_ortu' => 'yor',
            'nik' => '1234567890',
        ]);

        Balita::create([
           'jk' => 'lk'
        ]);
        
        Balita::create([
            'jk' => 'pr'
        ]);

        Balita::create([
            'kia' => 'ya'
        ]);

        Balita::create([
            'kia' => 'tidak'
        ]);

        Balita::create([
            'IMD' => 'ya'
        ]);

        Balita::create([
            'IMD' => 'tidak'
        ]);

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

    //     Balita::create([
    //         'kk' => '0123456789', 
    //         'nik' => '123456789', 
    //         'nama' => 'anya forger', 
    //         'jk' => 2, 
    //         'tgl_lahir' => '2020-10-18', 
    //         'berat_bdn' => '20 kg', 
    //         'panjang_bdn' => '120 cm', 
    //         'lingkar_lengan' => '15 cm', 
    //         'lingkar_kepala' => '20 cm', 
    //         'kia' => 1, 
    //         'IMD' => 2, 
    //         'nm_ortu' => 'yor',
    //         'nik_ortu' => '123456789025555', 
    //     ]);
    }   
}
