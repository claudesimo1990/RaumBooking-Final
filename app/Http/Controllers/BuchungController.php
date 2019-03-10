<?php

namespace App\Http\Controllers;

use App\Buchung;
use App\Gebaude;
use App\Mail\BuchungEmails;
use App\Notifications\newBuchungNotify;
use App\Raum;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BuchungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(auth()->id());
        return view('users.Buchung.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     //neue Instance von der Klasse Buchung erzeugen
      $buchung = new Buchung;

      $buchung->gebaude_id = $request->gebaude_id;
      $buchung->user_id = auth()->id();
      $buchung->raum_number = $request->raum_number;
      $buchung->von = $request->von;
      $buchung->bis = $request->bis;
      $buchung->raum_id = $request->raum_id;
      $buchung->event = $request->message;
      $buchung->color = $request->color;
      $buchung->qrcode = rand();

      $buchung->save();


      
      $data = [ 
        'raum_number' => $request->raum_number,
        'von'         => $request->von,
        'bis'         => $request->bis,
        'date'         => $request->date,
        'qrcode'         => $buchung->qrcode,
        'event'      => $request->message
      ];



      $user = User::find(auth()->id());

      $user->notify( new newBuchungNotify($data)
      );



      flash('Buchung erfolgreich')->success();

      return back();

    }
       public function UserBuchung()
       {
          $singlebuchung = Buchung::all();
          return view('users.Buchung.singlebuchung',compact('singlebuchung'));
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
