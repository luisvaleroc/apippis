<?php

namespace App\Http\Controllers;


use App\Store;

use App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $store = Store::find($id);
        $this->authorize('pass', $store);

        $employees= $store->employee()->name($request->get('name'))->paginate();

     
        return view('employees.index', compact('store', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $store = Store::find($id);
        $this->authorize('pass', $store);

        
        return view('employees.create', compact('store'));
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
            'name' => 'required|alpha_num',
            'rut' => 'required|alpha_num'
        ]);
       
        $employee = Employee::create($request->all());
       
        $employee->store()->associate($store)->save();

        // $solidwaste->save();
        return redirect()->route('employees.create', $store->id)
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
    public function edit(Store $store, Employee $employee)
    {       

        $this->authorize('pass', $store);

        //$store = Solidwaste::find($id);
        return view('employees.edit', compact('employee', 'store'));

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
        $validateData = $request->validate([
            'name' => 'required|alpha_num',
            'rut' => 'required|alpha_num'
        ]);

        $employee = Employee::find($id);

        $store = $employee->store;

        $employee->update($request->all());

        return redirect()->route('employees.edit', [$store->id, $employee->id] )
        ->with('status', 'Guardado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee = $employee->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
}
