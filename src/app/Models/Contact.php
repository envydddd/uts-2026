<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'gmail',
    ];
}