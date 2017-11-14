<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Bijlage;
use App\Element;
use App\Functie;
use App\Special;
use App\Toelichtingsector;
use App\Beschouwingfunctie;
use App\Beschrijvingfunctie;
use App\Prioriteringfunctie;
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

    public function gettoelichtingsectors()
    {
        $toelichtingsectors = Toelichtingsector::get();
        return $toelichtingsectors;
    }

    public function getbeschrijvingfuncties()
    {
        $beschrijvingfuncties = Beschrijvingfunctie::get();
        return $beschrijvingfuncties;
    }

    public function getbeschouwingfuncties()
    {
        $beschouwingfuncties = Beschouwingfunctie::get();
        return $beschouwingfuncties;
    }

    public function getprioriteringfuncties()
    {
        $prioriteringfuncties = Prioriteringfunctie::get();
        return $prioriteringfuncties;
    }

    public function getbijlages()
    {
        $bijlages = Bijlage::all();
        return $bijlages;
    }
}
