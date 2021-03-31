<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{

	protected $fillable = [
		'slug', 'nama_ketua', 'nama_ormawa', 'tahun_sk'
	];

	

	protected $hidden = [
		// 
	];


	public function ukms(){

		return $this->hasMany(Ukms::class,'organization_id','id');

	}

	public function hmps(){

		return $this->hasMany(Hmps::class,'organization_id','id');

	}
}
