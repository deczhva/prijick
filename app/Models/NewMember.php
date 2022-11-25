<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_anak',
        'nik_anak',
        'jenis_kelamin_id',
        'nama_ortu',
        'nik_ortu',
        'no_kk',
        'alamat',
    ];
}
