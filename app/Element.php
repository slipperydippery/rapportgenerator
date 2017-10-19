<?php

namespace App;

use App\Sector;
use App\Functie;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    public function sector()
    {
    	return $this->belongsTo('Sector', 'sector_id');
    }

    public function functie()
    {
    	return $this->belongsTo('Functie', 'functie_id');
    }
}
