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
    public function index(Request $request, $id)
    {
        $store = Store::find($id);
        
        $solidwastes= $store->solidwaste()->name($request->get('name'))->paginate();

     
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
        
        // $validator = Validator::make($request->all(), [ 
        //     'name' => 'required', 
        //     'address' => 'required', 
        //     'brand_id' => 'required', 
           
        // ]);
        // if ($validator->fails()) { 
        //     return response()->json(['error'=>$validator->errors()], 401);            
        // }

        $solidwaste = Solidwaste::create($request->all());
        
       
        
       
        $solidwaste->store()->associate($store)->save();

        // $solidwaste->save();
        return redirect()->route('solidwastes.create', $store->id)
        ->with('status', 'Guardado con éxito');





        // return response()->json([
        //     $solidwaste,
        //     "message" => "El Local a sido creado correctamente.",

        //     ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Solidwaste $solidwaste)
    {
        return response()->json($solidwaste, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit( Store $store,  solidwaste $solidwaste)
    {
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
        

        // $validator = Validator::make($request->all(), [ 
        //     'pvc' => 'required', 
            
           
        // ]);
        // if ($validator->fails()) { 
        //     return response()->json(['error'=>$validator->errors()], 401);            
        // // }
        
        // $solidwaste->update($request->all());
        // return response()->json([
        //     $solidwaste,
        //     "message" => "La Empresa a sido actualizada correctamente.",
        
        // ], 200);

        $solidwaste = Solidwaste::find($id);

        $store = $solidwaste->store;

        $solidwaste->update($request->all());

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

        // return response()->json([
            
        //     "message" => "La planilla a sido eliminada correctamente.",
        
        // ], 200); 
    }
}
