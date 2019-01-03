<?php

namespace App\Http\Controllers;

use App\User;
use App\profile;
use Illuminate\Broadcasting\Broadcasters\auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
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
        return view('users.editProfile',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
         
         'vorname' => 'required',
         'matrikelnummer' => 'required | integer',
         'studiengang' => 'required',
         'semester' => 'required | integer',
         'adresse' => 'required',
         'avatar' => 'required | mimes:jpeg,png'
        ]);

        if ($request->hasFile('avatar')) {

            $avatar = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('public/avatar',$avatar);    
        }

        $profile = new profile;

        $profile->vorname = $request->vorname;
        $profile->matrikelnummer = $request->matrikelnummer;
        $profile->studiengang = $request->studiengang;
        $profile->semester = $request->semester;
        $profile->adresse = $request->adresse;
        $profile->user_id = auth()->id();
        $profile->avatar = $avatar;
        
        $profile->save();

        return redirect('/profile')->with('success', 'Ihre Daten wurden erfolgreich registriert');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::find(auth()->id());

        $profiles = profile::where('user_id',auth()->id())->get();

        // dd($profiles);

        return view('users.profile', compact(['users','profiles']));
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
