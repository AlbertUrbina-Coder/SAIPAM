<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudade;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CiudadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades =DB::table('ciudades')
        ->join('countries', 'countries.id', '=', 'ciudades.countries_id')
        ->select('*')
        ->get();

        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('/ciudades.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudades=new Ciudade();
        $ciudades->nombreCiudad=$request->get('nombre');
        $ciudades->countries_id=$request->get('countries_id');
        $ciudades->save();
        return redirect('/ciudades');
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
        $ciudad= Ciudade::find($id);
        $country = Country::find($id);
        return view('ciudades.edit', compact('ciudad', 'country'));
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
        $ciudad= Ciudade::find($id);
        $ciudad->nombreCiudad=$request->get('nombre');
        $ciudad->save();
        return redirect('/ciudades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad= Ciudade::find($id);
        $ciudad->delete();
        return redirect('/ciudades');
    }

    public function getCountries()
    {
        $countries = Country::get();
        $countriesArray[''] = 'Selecciona un Pais';
        foreach ($countries as $country) {
            $countriesArray[$country->id] = $country->name;
        }
        return $countriesArray;
    }
}
