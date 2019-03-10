<?php

namespace App\Http\Controllers\Admin;

use App\Gebaude;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GebaudeController extends Controller
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
       $gebaude = Gebaude::paginate(10);
       return view('admin.gebaude.index',['gebaudes' => $gebaude]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gebaude.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        request()->validate([

         'name' => 'required',
         'anz_etage' => 'required | integer',
         'anz_raum' => 'required | integer',
         'image' => 'required | mimes:jpeg,png'
        ]);

        if ($request->hasFile('image')) {

            $image = $request->image->getClientOriginalName();
            $request->image->storeAs('public/gebaude',$image);    

        //store
        $gebaude = new Gebaude;
        $gebaude->name = request('name');
        $gebaude->anz_raum = request('anz_raum');
        $gebaude->anz_etage = request('anz_etage');
        $gebaude->image = $image;

        $gebaude->save();
        return redirect('admin/gebaude');

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
        $gebaude = Gebaude::find($id);

        return view('admin.gebaude.show',['gebaude' => $gebaude]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
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
        Gebaude::find($id)->delete();
        return back();
    }
}
