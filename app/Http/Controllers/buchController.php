<?php

namespace App\Http\Controllers;

use App\Gebaude;
use App\Raum;
use App\User;
use Composer\Autoload\Request;

class buchController extends Controller
{
    public function create()
    { 
        $id = request('id');
        $name = request('name');

    	$user = User::find(auth()->id());
        return view('users.Buchung.create',compact(['user','id','name']));
    }

    public function store()					
    {
        
      
         return 'Hallo';
    }
}
