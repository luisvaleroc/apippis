<?php

namespace App\Http\Controllers;

use App\Brand;
use Validator;


use Illuminate\Support\Facades\Auth;

 

use Illuminate\Http\Request;

class BrandController extends Controller
{


//  public function __construct()
// 	{
// 		$this->middleware('auth');
// 	} 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	//$this->middleware('auth');
        // $brands = Post::Brand('id', 'DESC')
        //     ->where('id', auth()->user()->brand_id)
        //     ->paginate();
       
        // $brands = Brand::all();
	//$user= Auth::user();
	
        // return response()->json($brands, 200);
        
        //$brands = Brand::paginate();
        $brands = Brand::name($request->get('name'))->orderBy('id', 'DESC')->get();

        return view('brands.index', compact('brands'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $validator = Validator::make($request->all(), [ 
        //     'name' => 'required', 
        //     'sector' => 'required', 
           
        // ]);
// if ($validator->fails()) { 
//             return response()->json(['error'=>$validator->errors()], 401);            
//         }

$validateData = $request->validate([
    'name' => 'required',
    'sector' => 'required'
]);

        $brand = brand::create($request->all());
        
            // return response()->json([
            //     "message" => "La empresa a sido creada correctamente.",
            //     "empleado" => $request
            // ], 200);  
            
            //return response()->json($brand, 200);
            
            //este si
            // return response()->json([
            //     $brand,
            //     "message" => "La Empresa a sido creada correctamente.",

            // ], 200);

            return redirect()->route('brands.create', $brand->id)
            ->with('status', 'Empresa guardada con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        return view('brands.show', compact('brand'));


       // return response()->json($brand, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //return response()->json($brand, 200);



        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
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


        return redirect()->route('brands.edit', $brand->id)
        ->with('status', 'Guardado con éxito');

        // return response()->json([
        //     $brand,
        //     "message" => "La Empresa a sido actualizada correctamente.",
        
        // ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id)->delete();
        return back()->with('status', 'Eliminado correctamente');
        // return response()->json([
        //     "message" => "La Empresa a sido eliminada correctamente.",
        
        // ], 200); 
    }



    
}
