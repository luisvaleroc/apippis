<?php

namespace App\Http\Controllers;

use App\Store;
use App\Brand;
use App\Solidwaste;
use Validator;
use Carbon\Carbon;


use Illuminate\Http\Request;

class SolidwasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id)
    {
        $store = Store::find($id);
        $this->authorize('pass', $store);

        
       // $solidwastes= $store->solidwaste()->name($request->get('name'))->paginate();
       $solidwastes= $store->solidwaste()->orderBy('ID', 'DESC')->get();

        return view('solidwastes.index', compact('store', 'solidwastes'));

         //return response()->json($solidwastes, 200);
//este
        // return response()->json(
        //     $solidwastes, 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $store = Store::find($id);
        $this->authorize('pass', $store);

        
        return view('solidwastes.create', compact('store'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Store $store)
    {
        
        $validateData = $request->validate([
            'paper' => 'required|numeric',
            'paperboard' => 'required|numeric',
            'plastic' => 'required|numeric',
            'pvc' => 'required|numeric',
            'scrap' => 'required|numeric',
            'glass' => 'required|numeric',
            'food' => 'required',
            'ordinary' => 'required|numeric',
            
            
        ]);
        
        $solidwaste = new Solidwaste();

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
       
      

            $solidwaste->paper = $request->input('paper');
            $solidwaste->paperboard = $request->input('paperboard');
            $solidwaste->plastic = $request->input('plastic');
            $solidwaste->pvc = $request->input('pvc');
            $solidwaste->scrap = $request->input('scrap');
            $solidwaste->glass = $request->input('glass');
            $solidwaste->food = $request->input('food');
            $solidwaste->ordinary = $request->input('ordinary');
            $solidwaste->store_id = $store->id;
            $solidwaste->photo = $name;
            $solidwaste->save();

        return redirect()->route('solidwastes.create', $store->id)
        ->with('status', 'Guardado con éxito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store, Solidwaste $solidwaste)
    {
        $this->authorize('pass', $store);

        return view('solidwastes.show', compact('store', 'solidwaste'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit( Store $store,  solidwaste $solidwaste)
    {
        $this->authorize('pass', $store);

        //$store = Solidwaste::find($id);
        return view('solidwastes.edit', compact('solidwaste', 'store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validateData = $request->validate([
            'paper' => 'required|numeric',
            'paperboard' => 'required|numeric',
            'plastic' => 'required|numeric',
            'pvc' => 'required|numeric',
            'scrap' => 'required|numeric',
            'glass' => 'required|numeric',
            'food' => 'required',
            'ordinary' => 'required|numeric',
            
            
        ]);
        

            
        $solidwaste = Solidwaste::find($id);


        $solidwaste->fill($request->except('photo'));
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = time().$file->getClientOriginalName();
            $solidwaste->photo = $name;
            $file->move(public_path().'/images/', $name);
        }
        $solidwaste->save();



        $store = $solidwaste->store;

        //$solidwaste->update($request->all());

        return redirect()->route('solidwastes.edit', [$store->id, $solidwaste->id] )
        ->with('status', 'Encuesta guardada con éxito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solidwaste $solidwaste)
    {
        $solidwaste = $solidwaste->delete();
        return back()->with('status', 'Eliminado correctamente');

    }

    public function datasolidwastes()
    {
         $store = Store::find($id);
        
         $solidwastes= $store->solidwaste();

         return datatables(Sokidwaste::query())->toJson();

        
    }
}
