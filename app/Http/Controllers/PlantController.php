<?php

namespace App\Http\Controllers;


use App\Store;
use App\Room;
use App\Plant;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request, $id)
    {

        $store = Store::find($id);
        $this->authorize('pass', $store);

        //$plants2 = $plants->plant->paginate();
        

       // $plants = Plant::get($plants->id)->with(['plant'])->paginate();
       //$plants = Store::find($id)->with(['r'])->paginate();
       // $plants = $rooms->plants;

        $plants = DB::table('stores')
            ->join('rooms', 'stores.id', '=', 'rooms.store_id')
            ->join('plants', 'rooms.id', '=', 'plants.room_id')
            ->select('plants.id', 'plants.observation', 'plants.equip1', 'plants.equip2', 'plants.equip3', 'plants.floor', 'plants.wall', 'plants.dump', 'plants.action', 'plants.created_at as created_at')
            ->where('stores.id', $store->id)
            ->orderBy('stores.id', 'desc')
            ->get();
     
        // $plants= $store->room()->plant()->name($request->get('name'))->paginate();

     
       // $plants= $room->plant()->paginate();

     
          return view('plants.index', compact('store', 'plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $store = Store::find($id);
        $rooms = Room::where('store_id', $store->id)->get();
        
        return view('plants.create', compact('store', 'rooms'));
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
            'equip1' => 'required',
            'equip2' => 'required',
            'equip3' => 'required',
            'floor' => 'required',
            'wall' => 'required',
            'dump' => 'required',
            'action' => 'required',
            'room_id' => 'required',
        ]);


        
        $plant = new Plant();

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
       
        //$plant = Plant::create($request->all());


            
           
            $plant->equip1 = $request->input('equip1');
            $plant->equip2 = $request->input('equip2');
            $plant->equip3 = $request->input('equip3');
            $plant->floor = $request->input('floor');
            $plant->wall = $request->input('wall');
            $plant->dump = $request->input('dump');
            $plant->action = $request->input('action');
            $plant->room_id = $request->input('room_id');
            $plant->photo = $name;
            $plant->save();

        // $solidwaste->save();
        return redirect()->route('plants.create', $store->id)
        ->with('status', 'Guardado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Store $store, Plant $plant)
    {
        $this->authorize('pass', $store);

        return view('plants.show', compact('store', 'plant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store, Plant $plant)
    {
        $this->authorize('pass', $store);

        $rooms = Room::get();

        return view('plants.edit', compact('plant', 'store', 'rooms'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store, $id)
    {


        $plant = Plant::find($id);


        $plant->fill($request->except('photo'));
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = time().$file->getClientOriginalName();
            $plant->photo = $name;
            $file->move(public_path().'/images/', $name);
        }
        $plant->save();


        $store = $plant->room->store;
       // $plant->update($request->all());
        return redirect()->route('plants.edit', [$store->id, $plant->id] )
        ->with('status', 'Guardada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant = $plant->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
}
