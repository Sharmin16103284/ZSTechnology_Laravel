<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    //update
	protected $fillable = [
		'image',
		'name', 
		'designation',
		'text',
		'fb',
        'twitter', 
		'email',
		'linkedin',
    ];

	public $timestamps = false;
}
