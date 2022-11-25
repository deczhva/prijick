<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitaminA extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'tgl_lahir',
        'alamat',
        'tgl_pemberian'
    ];

    public $timestamps = true;

}
