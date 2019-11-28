<?php

namespace App\Http\Controllers;

use App\Brand;
use Validator;


use Illuminate\Support\Facades\Auth;

 

use Illuminate\Http\Request;

class BrandController extends Controller
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
	//$this->middleware('auth');
        // $brands = Post::Brand('id', 'DESC')
        //     ->where('id', auth()->user()->brand_id)
        //     ->paginate();
        $brands = Brand::paginate();
	//$user= Auth::user();
	
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
        
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'sector' => 'required', 
           
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

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
        
        return response()->json($brand, 200);
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
