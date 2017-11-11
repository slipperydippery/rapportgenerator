<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Element;
use App\Functie;
use App\Special;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexsector()
    {
    	$sector = Sector::all();
    	return $sector;
    }

    public function indexfunctie()
    {
    	$functie = Functie::all();
    	return $functie;
    }

    public function getElement(Sector $sector, Functie $functie)
    {
        // return $functie->elements;  
        // return $sector->elements;       
        $element = $sector->elements->intersect($functie->elements)->first();
        return $element;
    }

    public function getspecials()
    {
        $specials = Special::all();
        return $specials;
    }
}
