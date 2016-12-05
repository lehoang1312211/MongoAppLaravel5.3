<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sandbox;

class Home extends Controller
{
    public function loadHome()
    {
    	//$sandbox = Sandbox::all();
    	//dd( $sandbox );
    	return view('welcome');
    }
}
