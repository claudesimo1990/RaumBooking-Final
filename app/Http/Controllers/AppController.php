<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function accueil ()
    {
    	return view('app.index');
    }

     public function contact ()
    {
    	return view('app.contact');
    }
}
