<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'tinggi_bdn',
        'berat_bdn',
        'tensi',
        'gula_darah',
        'asam_urat',
        'kolesterol'
    ];

    public $timestamps = true;
}
