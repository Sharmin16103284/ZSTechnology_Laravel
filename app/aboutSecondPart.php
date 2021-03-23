<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutSecondPart extends Model
{
    //update 
	protected $fillable = [
		'sheadline',
		'text',
    ];

	public $timestamps = false;
}
 