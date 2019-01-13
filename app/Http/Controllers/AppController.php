<?php

namespace App\Http\Controllers;

use App\Gebaude;
use App\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function accueil ()
    {
    	$gebname = Gebaude::all();

    	return view('app.index',compact('gebname'));
    }

     public function contact ()
    {
    	$user = User::find(auth()->id());
    	return view('app.contact',compact('user'));
    }
}
