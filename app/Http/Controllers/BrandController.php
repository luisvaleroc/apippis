<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Sector;

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
        $sectors = Sector::all();
        return view('brands.create', compact('sectors'));

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
    'name' => 'required|alpha_num',
    'sector' => 'required'
]);

        $brand = brand::create($request->except(['sector']));
        $brand->sector()->associate($request->input('sector'))->save();


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
        
        $brand = Brand::find($id);
        $sectors = Sector::all();
        return view('brands.edit', compact('brand', 'sectors'));
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
        $validateData = $request->validate([
            'name' => 'required|alpha_num',
            'sector' => 'required'
        ]);
        
        $brand->update($request->except(['sector']));

        $brand->sector()->associate($request->input('sector'))->save();

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
