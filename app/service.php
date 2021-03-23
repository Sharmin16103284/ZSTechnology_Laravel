<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //joining with category table
	function relationBetweenServiceAndServiceCategory()
    {
    	return $this->hasOne('App\serviceCategory','id','serviceId');
    }
}
