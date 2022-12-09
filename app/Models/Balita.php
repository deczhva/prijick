<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
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
        'tgl_lahir',
        'berat_bdn',
        'panjang_bdn',
        'lingkar_lengan',
        'lingkar_kepala',
        'kia',
        'IMD'
    ];

    public function NewMember(){
        return $this->belongsTo(NewMember::class, 'id', 'new_member_id');
    }

    public $timestamps = true;
}
