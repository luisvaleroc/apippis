<?php

namespace App\Http\Controllers;

use App\Store;
use App\Brand;
use App\Room;
use Validator;
use Carbon\Carbon;

use Illuminate\Http\Request;

class RoomController extends Controller
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

        $rooms= $store->room()->name($request->get('name'))->paginate();

     
        return view('rooms.index', compact('store', 'rooms'));
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

        
        return view('rooms.create', compact('store'));
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
            'name' => 'required|regex:/^[A-Za-z0-9\s]+$/u',
            'description' => 'required|regex:/^[A-Za-z0-9\s]+$/u',
            
        ]);
        $rooms = Room::create($request->all());
        
       
        
       
        $rooms->store()->associate($store)->save();

        // $solidwaste->save();
        return redirect()->route('rooms.create', $store->id)
        ->with('status', 'Creado con éxito');
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
        $this->authorize('pass', $store);

        $room = Room::find($id);
        return view('rooms.edit', compact('room', 'store'));
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
            'name' => 'required|regex:/^[A-Za-z0-9\s]+$/u',
            'description' => 'required|regex:/^[A-Za-z0-9\s]+$/u',
            
        ]);
        $room = Room::find($id);

        $store = $room->store;

        $room->update($request->all());

        return redirect()->route('rooms.edit', [$store->id, $room->id] )
        ->with('status', 'guardadO con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room = $room->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
}
