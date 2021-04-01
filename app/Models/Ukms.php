<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ukms extends Model
{

	protected $fillable = [
		'ukm_id', 'url_ukm'
	];

	

	protected $hidden = [
		// 
	];



	public function forUkm(){

		return $this->belongsTo(Organizations::class,'ukm_id', 'id');
	}

}
