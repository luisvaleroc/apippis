<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate();

        return response()->json($brands, 200);
        
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
        
        $validateData = $request->validate([
            'name' => 'required',
            'sector' => 'required',
            ]);
        
        $brand = brand::create($request->all());
        
            // return response()->json([
            //     "message" => "La empresa a sido creada correctamente.",
            //     "empleado" => $request
            // ], 200);  
            
            //return response()->json($brand, 200);
            return response()->json([
                $brand,
                "message" => "La Empresa a sido creada correctamente.",

            ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        return response()->json($brand, 200);
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
    public function update(Request $request, brand $brand)
    {
        
        $brand->update($request->all());
        return response()->json([
            $brand,
            "message" => "La Empresa a sido actualizada correctamente.",
        
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        $brand = Brand::find($brand)->delete();
        return response()->json([
            "message" => "La Empresa a sido eliminada correctamente.",
        
        ], 200); 
    }
}
