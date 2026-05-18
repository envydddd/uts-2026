<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'judul_project',
        'deskripsi',
        'latar_belakang',
        'fitur_utama',
        'teknologi',
        'gambar_erd',
        'gambar_flowchart',
        'link_laporan',
    ];
}