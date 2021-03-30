<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Prestations extends Model
{

	protected $fillable = [
		'nama_lengkap', 'slug', 'nim', 'prodi', 'no_hp', 'nama_acara', 'institusi_pembuat_acara',
		'peringkat_perlombaan','tanggal_pelaksanaan','sertifikat','dokumentasi_acara'
	];


	protected $hidden = [
		// 
	];
}
