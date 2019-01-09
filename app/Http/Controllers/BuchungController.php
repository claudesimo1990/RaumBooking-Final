<?php

namespace App\Http\Controllers;

use App\Buchung;
use App\Gebaude;
use App\Raum;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

     $raum = Gebaude::find(request('id'))->raume->where('name',request('name'))->first();

      $request->validate([

      'von' => ['required'],
      'bis' => ['required'],
      'kommentar' => ['required']
       ]); 
     
     $buchung = new Buchung;

     $buchung->gebaude_id = request('id');
     $buchung->user_id = auth()->id();
     $buchung->raum_id = $raum->id;
     $buchung->von = request('von');
     $buchung->qrcode = 12346483;
     $buchung->bis = request('bis');


     //Update status Raum

     DB::table('raums')
     ->where('id',$raum->id)
     ->update(['status' => 0]);

    //flush in der Datenbank
     $buchung->save();
     flash('Ihre Buchung wurde entgegen genommen Sie bekommen eine Bestätigung per Email ')->success();
      return redirect('/gebaude');
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
