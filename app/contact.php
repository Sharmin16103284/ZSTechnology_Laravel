<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'address',
        'fphone',
        'sphone',
        'email',
    ];
    public $timestamps = false;
    
}
