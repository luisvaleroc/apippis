<?php

namespace App\Http\Controllers;

use App\Store;
use App\Brand;
use Validator;

use Illuminate\Support\Facades\Auth; 

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     

        if(auth()->user()->brand_id  == null){
            return 'No tiene una empresa asignada, comuniquese con soporte';
        }
        $brand = brand::orderBy('id', 'ASC')
            ->where('id', auth()->user()->brand_id)->first();
        $stores= $brand->Store()->name($request->get('name'))->orderBy('id', 'ASC')->get();

        return view('stores.index', compact('stores', 'brand'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
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
            'name' => 'required|regex:/^[A-Za-z0-9\s]+$/u', 
            'address' => 'required', 
           
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }


        $brand = brand::orderBy('id', 'DESC')
        ->where('id', auth()->user()->brand_id)->first();
       
        $store = new Store();
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->brand_id = $brand;
        $store->brand()->associate($brand)->save();
        $store->save();
        return redirect()->route('stores.create', $store->id)
        ->with('status', 'Local guardado con éxito');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return response()->json($store, 200);
        $store = Store::find($id);
        $this->authorize('pass', $store);
        return view('stores.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);
        return view('stores.edit', compact('store'));
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
            'name' => 'required|regex:/^[A-Za-z0-9\s]+$/u',
            'address' => 'required',
            
        ]);
        $store = Store::find($id);

        $store->update($request->all());

        return redirect()->route('stores.edit', $store->id)
        ->with('status', 'Encuesta guardada con éxito');

        $store->update($request->all());
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Store::find($id)->delete();
        return back()->with('status', 'Eliminado correctamente');

    }
}
