<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ukms extends Model
{

	protected $fillable = [
		'organization_id', 'url_ukm'
	];

	

	protected $hidden = [
		// 
	];



	public function organization(){

		return $this->belongsTo(Organizations::class,'organization_id', 'id');
	}

	

}
