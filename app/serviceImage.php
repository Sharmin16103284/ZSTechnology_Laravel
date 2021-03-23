<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceImage extends Model
{
    ///update
	protected $fillable = [
		'image',
    ];

	public $timestamps = false;
}
