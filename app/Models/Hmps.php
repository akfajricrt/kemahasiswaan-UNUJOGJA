<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hmps extends Model
{

	protected $fillable = [
		'organization_id', 'url_hmp'
	];

	

	protected $hidden = [
		// 
	];


	public function organization(){

		return $this->belongsTo(Organizations::class,'organization_id','id');
	}
}
