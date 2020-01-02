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
        
        $cleanings= $store->cleaning()->name($request->get('name'))->paginate();

     
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
        
        $cleaning = cleaning::find($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
