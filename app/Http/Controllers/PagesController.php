<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Functie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$sectors = Sector::all();
    	$functies = Functie::all();
    	return view ('welcome', compact('sectors', 'functies'));
    }
}