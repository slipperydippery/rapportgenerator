<?php

namespace App;

use App\Sector;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public function elements()
    {
    	return $this->hasMany('App\Element');
    }
}
