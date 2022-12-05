<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;

    protected $fillable = [
        'new_member_id',
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
