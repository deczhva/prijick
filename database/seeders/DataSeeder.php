<?php

namespace Database\Seeders;

use App\Models\Balita;
use App\Models\JenisKelamin;
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
        JenisKelamin::create([
            'name' => 'lk'
        ]);

        JenisKelamin::create([
            'name' => 'pr'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
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

        NewMember::create([
            'nama_anak' => 'syahputra',
            'jenis_kelamin_id' => 1,
            'nik_anak' => '1234567890123456',
            'nama_ortu' => 'fulanah',
            'nik_ortu' => '1324569870312645',
            'no_kk' => '7894561230123456',
            'alamat' => 'jl.apa hayo no. 32 ya condet'
        ]);

        Balita::create([
            'new_member_id' => 1,
            'tgl_lahir' => '2020-06-08',
            'berat_bdn' => '20 Kg',
            'panjang_bdn' => '120 Cm',
            'lingkar_lengan' => '35 Cm',
            'lingkar_kepala' => '60 Cm',
            'kia' => 'tidak',
            'IMD' => 'tidak',
        ]);
    }   
}
