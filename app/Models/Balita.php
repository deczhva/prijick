<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;

    protected $fillable = [
        'kk', 
        'nik', 
        'nama', 
        'jk', 
        'tgl_lahir', 
        'berat_bdn', 
        'panjang_bdn', 
        'lingkar_lengan', 
        'lingkar_kepala', 
        'kia', 
        'imd', 
        'nm_ortu',
        'nik_ortu', 
        'alamat'
    ];

    public $timestamps = true;
}
