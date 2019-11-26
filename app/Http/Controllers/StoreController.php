<?php

namespace App\Http\Controllers;

use App\Store;
use App\Brand;
use Validator;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Brand $brand)
    {
        
        $stores= $brand->Store;
      
        return response()->json($stores, 200);
        
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
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'address' => 'required', 
            'brand_id' => 'required', 
           
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $store = Store::create($request->all());
        
        return response()->json([
            $store,
            "message" => "El Local a sido creado correctamente.",

            ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return response()->json($store, 200);
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
    public function update(Request $request, Store $store)
    {
        

        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'address' => 'required', 
            
           
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        
        $store->update($request->all());
        return response()->json([
            $store,
            "message" => "La Empresa a sido actualizada correctamente.",
        
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store = $store->delete();
        return response()->json([
            
            "message" => "El local a sido eliminado correctamente.",
        
        ], 200); 
    }
}
