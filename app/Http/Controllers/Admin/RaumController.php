<?php

namespace App\Http\Controllers\Admin;

use App\Gebaude;
use App\Http\Controllers\Controller;
use App\Raum;
use Illuminate\Http\Request;

class RaumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raume = Raum::latest()->paginate(10);

        return view('admin/Raum/index',compact('raume'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gebaudeId = Gebaude::all();

        return view('admin/Raum.create', compact('gebaudeId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd(request()->all());
        //validation von Daten

        request()->validate([
        
         'raum_number' => 'required',
         'gebaude_id' => 'required',
         'name'        => 'required',
         'image'        => 'required',
        ]);

        //speicherung in die Datenbank

        if ($request->hasFile('image')) {

            $image = $request->image->getClientOriginalName();
            $request->image->storeAs('public/raum',$image);    


        Raum::create([

        'raum_number' => request('raum_number'),
        'gebaude_id' => request('gebaude_id'),
        'name' => request('name'),
        'image' => $image,
        ]);
        flash('der Raum wurde erfolgreich in die Datenbank gespeichert !!')->success();
        return redirect('admin/raume');
        }
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
        Raum::find($id)->delete();
        flash('deleted')->success();
        return back();
    }
}
