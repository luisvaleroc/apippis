<?php

namespace App\Http\Controllers;



use App\Store;

use App\Cleaning;
use App\Employee;


use Illuminate\Http\Request;

class CleaningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $store = Store::find($id);
        
        $cleanings= $store->cleaning()->name($request->get('name'))->orderBy('ID', 'DESC')->get();

     
        return view('cleanings.index', compact('store', 'cleanings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $store = Store::find($id);
       

        
        return view('cleanings.create', compact('store'));
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
            'mask' => 'required',
            'wound' => 'required',
            'makeup' => 'required',
            'jewelry' => 'required',
            'ear' => 'required',
            'shoe' => 'required',
            'hair' => 'required',
            'nail' => 'required',
            'uniform' => 'required',
            'rut' => 'required|exists:Employees',
            
            
        ]);
        $rut = $request->input('rut');

        $employee = Employee::where('rut', $rut)->first();
        
        $cleaning = new Cleaning();
        $cleaning->mask = $request->input('mask');
        $cleaning->wound = $request->input('wound');
        $cleaning->makeup = $request->input('makeup');
        $cleaning->jewelry = $request->input('jewelry');
        $cleaning->ear = $request->input('ear');
        $cleaning->shoe = $request->input('shoe');
        $cleaning->hair = $request->input('hair');
        $cleaning->nail = $request->input('nail');
        $cleaning->uniform = $request->input('uniform');
        $cleaning->observation = $request->input('observation');
        $cleaning->employee_id = $employee->id;
        $cleaning->store_id = $store->id;

       
        $cleaning->save();


    //     $cleaning = Cleaning::create($request->all());
    
    //     $cleaning->store()->associate($store)->save();
    //    $cleaning->employee()->associate($rut)->save();
    //     // $solidwaste->save();
         return redirect()->route('cleanings.create', $store->id)
         ->with('status', 'Guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store, $id)
    {
        
        $cleaning = Cleaning::find($id);
        return view('cleanings.edit', compact('cleaning', 'store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cleaning = Cleaning::find($id);

        $store = $cleaning->store;

        $cleaning->update($request->all());

        return redirect()->route('cleanings.edit', [$store->id, $cleaning->id] )
        ->with('status', 'Guardado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {   
        $cleaning = Cleaning::find($id);
        $cleaning = $cleaning->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
}
