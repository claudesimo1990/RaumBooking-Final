<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
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

        $profile = new Profile;

        $profile->vorname = $request->vorname;
        $profile->matrikelnummer = $request->matrikelnummer;
        $profile->studiengang = $request->studiengang;
        $profile->semester = $request->semester;
        $profile->adresse = $request->adresse;
        $profile->user_id = auth()->id();
        $profile->avatar = $avatar;
        
        $profile->save();
        flash('Ihre Profile wurde erfolreich hergestellt !!')->success();
        return redirect('/profile');

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
        $profiles = Profile::where('user_id',auth()->id())->get();
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

        $user = User::find(auth()->id());  
        $profile = Profile::find($id);
        return view('users.profileUpdate',compact(['user','profile']));
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
        $data = $request->validate([
         
         'vorname' => 'required',
         'matrikelnummer' => 'required | integer',
         'studiengang' => 'required',
         'semester' => 'required | integer',
         'adresse' => 'required',
         'avatar' => 'required | mimes:jpeg,png'
        ]);
        if ($request->hasFile('avatar')) 
        {
            $avatar = $request->avatar->getClientOriginalName();
            $bild = Profile::find($id)->avatar;
            if ($bild == $avatar) {
                flash('Das Bild ist bereits verwendet !')->error();
                return back()->withInput();
            }else{
             $request->avatar->storeAs('public/avatar',$avatar);    
            }
            $profile = Profile::find($id);
            $profile->Update([
              'vorname' => $request->vorname,
              'matrikelnummer' => $request->matrikelnummer,
              'studiengang' => $request->studiengang,
              'semester' => $request->semester,
              'adresse' => $request->adresse,
              'avartar' => $request->avartar
            ]);         
        }
      flash('Ihre Profile ist up-to-date :)')->success();
      return redirect('/profile');

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
