<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{


    protected $fillable = [
        'email', 'nama_lengkap', 'no_hp', 'nim', 'prodi', 'kategori_keluhan', 'permasalahan'
    ];


    protected $hidden = [
        // 
    ];
}
