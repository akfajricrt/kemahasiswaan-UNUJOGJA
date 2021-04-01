<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hmps extends Model
{

	protected $fillable = [
		'hmp_id', 'url_hmp'
	];

	

	protected $hidden = [
		// 
	];


	public function forHmp(){

		return $this->belongsTo(Organizations::class,'hmp_id','id');
	}
}
