<?php

namespace App\Http\Controllers;

use App\Buchung;
use App\Gebaude;
use App\Mail\BuchungEmails;
use App\Raum;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
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
      if (\Carbon\Carbon::parse($request->von) < Carbon::now() || \Carbon\Carbon::parse($request->bis) < Carbon::now() && \Carbon\Carbon::parse($request->von)->format('H:i:s') > '09:00:00' || \Carbon\Carbon::parse($request->bis)->format('H:i:s') < '22:00:00') 
      {

           flash('Das Datum ,dass Sie eingegeben haben ist nicht korrekt !! ')->error();
           return back()->withInput();
       } 
      
     // find aktuellen Raum der gebucht wird
     $raum = Gebaude::find(request('id'))->raume()->where('name',request('name'))->first();

      //validation
      $request->validate([
      'von' => ['required'],
      'bis' => ['required'],
      'kommentar' => ['required']
       ]);

     //create Buchung and flush in der Datenbank

      //Array color
      $array  = ['#FF33BB', '#42FF33', '#3368FF', '#7D1468', '#F6071D','#5E6265','#99D922'];
      $random = array_rand($array);
      $color  = $array[$random];

      $data = Buchung::create([  
     'gebaude_id' => request('id'),
     'user_id' => auth()->id(),
      'raum_number' => $raum->raum_number,
     'von' => request('von'),
     'kommentar' => request('kommentar'),
     'qrcode' => rand(1000, 10000000),
     'bis' => request('bis'),
     'color' => $color 
      ]);
     //Update status Raum
     DB::table('raums')
     ->where('raum_number',$raum->raum_number)
     ->update(['status' => 1]);



     //send Email to den eingelogte User

      Mail::to($request->user())->send(new BuchungEmails($data));
     flash('Ihre Buchung wurde entgegen genommen Sie bekommen eine Bestätigung per Email ')
         ->success();
         return redirect('/gebaude');

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
