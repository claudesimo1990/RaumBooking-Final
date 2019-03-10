<?php

namespace App\Http\Controllers;

use App\Gebaude;
use App\User;
use Composer\Autoload\Request;
use Illuminate\Auth\Middleware\Auth;
use Illuminate\Http\Request as requestID;
use Illuminate\Support\Facades\Mail;

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
