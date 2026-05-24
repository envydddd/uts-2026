<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeProfile extends Model
{
    protected $fillable = [
        'nama',
        'subtitle',
        'about_me',
        'admin_info',
        'keahlian',
        'project_akhir',
        'foto',
    ];
}