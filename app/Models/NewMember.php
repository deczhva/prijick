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
        'jk',
        'nama_ortu',
        'nik_ortu',
        'no_kk',
        'alamat',
    ];

    public function Balita(){
        return $this->hasOne(Balita::class, 'id');
    }
}
