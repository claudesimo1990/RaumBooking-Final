<?php

namespace App\Http\Controllers;

use App\Gebaude;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $gebname = Gebaude::all();
        return view('app.index',compact('gebname'));
     }
}
