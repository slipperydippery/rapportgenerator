<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Element;
use App\Functie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$sectors = Sector::all();
    	$functies = Functie::all();
    	$sectorsselect = Sector::pluck('title', 'id');
    	$functiesselect = Functie::pluck('title', 'id');
    	$elements = Element::all();
    	return view ('welcome', compact('sectors', 'functies', 'elements', 'functiesselect', 'sectorsselect'));
    }
}
