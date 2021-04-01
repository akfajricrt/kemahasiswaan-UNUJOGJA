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


	public function ormawa(){

		return $this->hasManyThrough(Ukms::class,Hmps::class,'ukm_id','hmp_id','id','id');

	}

}
