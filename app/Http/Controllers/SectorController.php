<?php

namespace App\Http\Controllers;

use App\Sector;


use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::orderBy('id', 'DESC')->get();

        return view('sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sectors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|regex:/^[A-Za-z0-9\s]+$/u|unique:sectors',
            
        ]);
        
                $sector = Sector::create($request->all());
                
                
                    return redirect()->route('sectors.create', $sector->id)
                    ->with('status', 'Sector guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sector = Sector::find($id);
        return view('sectors.edit', compact('sector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sector $sector)
    {
        $validateData = $request->validate([
            'name' => 'required|regex:/^[A-Za-z0-9\s]+$/u',
            
        ]);
        $sector->update($request->all());


        return redirect()->route('sectors.edit', $sector->id)
        ->with('status', 'Guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector = Sector::find($id)->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
}
