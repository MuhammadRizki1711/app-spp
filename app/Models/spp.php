<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'spp';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'tahun',
        'nominal'
    ];

    // Jika tabel tidak menggunakan kolom created_at dan updated_at, maka tambahkan:
    public $timestamps = false;

    
}
