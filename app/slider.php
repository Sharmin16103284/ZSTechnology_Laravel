<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //update
	protected $fillable = [
		'image',
		'ftitle', 
		'stitle',
		'text',
    ];

	public $timestamps = false;
}
