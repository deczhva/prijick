<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'nama_ortu',
        'nik'
    ];
}
