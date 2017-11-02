<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Functie;
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
}
