<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Functie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$sectors = Sector::pluck('title', 'id');
    	$sectorsr = Sector::all();
    	$functies = Functie::pluck('title', 'id');
    	return view ('welcome', compact('sectors', 'functies', 'sectorsr'));
    }
}
