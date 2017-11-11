<?php

namespace App;

use App\Element;
use Illuminate\Database\Eloquent\Model;

class Functie extends Model
{
    public function elements ()
    {
    	return $this->hasMany('App\Element');
    }
}
