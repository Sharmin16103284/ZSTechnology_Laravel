<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{

	//update
	protected $fillable = [
		'name',
		'category_id',
		'nid',
		'address',
		'number',
		'blood_group',
		'image',
    ];



	//joining with category table
	function relationBetweenEmployeeAndCategory()
    {
    	return $this->hasOne('App\category','id','category_id');
    }



    public $timestamps = false;
}
