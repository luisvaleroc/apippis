<?php

namespace App\Http\Controllers;

use App\Store;
use App\Brand;
use App\Solidwaste;
use Validator;

use Illuminate\Http\Request;

class SolidwasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $store = Store::find($id);
        
        $solidwastes= $store->solidwaste;
    
         //return response()->json($solidwastes, 200);

        return response()->json(
            $solidwastes, 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, store $store)
    {
        
        // $validator = Validator::make($request->all(), [ 
        //     'name' => 'required', 
        //     'address' => 'required', 
        //     'brand_id' => 'required', 
           
        // ]);
        // if ($validator->fails()) { 
        //     return response()->json(['error'=>$validator->errors()], 401);            
        // }

        //$solidwaste = Solidwaste::create($request->all());
        
        $solidwaste->paper = $request->input('paper');
        $solidwaste->paperboard = $request->input('paperboard');
        $solidwaste->plastic = $request->input('plastic');
        $solidwaste->pvc = $request->input('pvc');
        $solidwaste->scrap = $request->input('scrap');
        $solidwaste->glass = $request->input('glass');
        $solidwaste->food = $request->input('food');
        $solidwaste->ordinary = $request->input('ordinary');
        $solidwaste->store_id =$store;
    
        $empleado->save();




        return response()->json([
            $solidwaste,
            "message" => "El Local a sido creado correctamente.",

            ], 200);
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
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solidwaste $solidwaste)
    {
        

        $validator = Validator::make($request->all(), [ 
            'pvc' => 'required', 
            
           
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        
        $solidwaste->update($request->all());
        return response()->json([
            $solidwaste,
            "message" => "La Empresa a sido actualizada correctamente.",
        
        ], 200);
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
        return response()->json([
            
            "message" => "La planilla a sido eliminada correctamente.",
        
        ], 200); 
    }
}
