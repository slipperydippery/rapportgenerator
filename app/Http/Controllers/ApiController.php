<?php

namespace App\Http\Controllers;

use App\Sector;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexsector()
    {
    	$sector = Sector::all();
    	return $sector;
    }
}
