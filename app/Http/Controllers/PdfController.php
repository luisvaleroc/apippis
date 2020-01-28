<?php

namespace App\Http\Controllers;


use App\Store;

use App\Cleaning;
use App\Employee;
use PDF;
use Carbon\Carbon;


use App\Room;
use App\Plant;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function edit($id)
    {
        //
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

    public function pdfSolidwastegDay ( Request $request, Store $store)
    {

       // $store = Store::find($id);
        
       // $cleanings= $store->cleaning()->name($request->get('name'))->orderBy('ID', 'DESC')->get();

       $solidwastes= $store->solidwaste()->name($request->get('name'))->get();

       $pdf = PDF::loadView('pdfs.solidwastes', ['solidwastes' => $solidwastes]);

      // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

return $pdf->download('Desechossolidos.pdf');


        }

        public function  pdfPlantMonth ( Request $request, Store $store,  $id)
    {

        $plantdate = Plant::find($id);

         $month2 =  date('Y-m', strtotime($plantdate->created_at));

       // $store = Store::find($id);
        
       // $cleanings= $store->cleaning()->name($request->get('name'))->orderBy('ID', 'DESC')->get();

       $plants = DB::table('stores')
       ->join('rooms', 'stores.id', '=', 'rooms.store_id')
       ->join('plants', 'rooms.id', '=', 'plants.room_id')
       ->select('plants.id', 'rooms.name', 'plants.observation', 'plants.equip1', 'plants.equip2', 'plants.equip3', 'plants.floor', 'plants.wall', 'plants.dump', 'plants.action', 'plants.created_at as created_at')
       ->where('stores.id', $store->id)
       ->where('plants.created_at', "LIKE",  "%$month2%")
       ->orderBy('stores.id', 'desc')
       ->get();
       

       $plant2 = DB::table('stores')
       ->join('rooms', 'stores.id', '=', 'rooms.store_id')
       ->join('plants', 'rooms.id', '=', 'plants.room_id')
       ->select('plants.id', 'plants.observation', 'plants.equip1', 'plants.equip2', 'plants.equip3', 'plants.floor', 'plants.wall', 'plants.dump', 'plants.action', 'plants.created_at as created_at')
       ->where('stores.id', $store->id)
       ->where('plants.created_at', "LIKE",  "%$month2%")
       ->orderBy('stores.id', 'desc')
       ->first();

       $pdf = PDF::loadView('pdfs.plants', ['plants' => $plants], ['plant2' => $plant2] );

      // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

return $pdf->download('Limpiezasanitizacion.pdf');

}


public function  pdfCleaningMonth ( Request $request, Store $store,  $id)
{

    $cleaningdate = Cleaning::find($id);

     $month2 =  date('Y-m', strtotime($cleaningdate->created_at));


     $store = Store::find($id);
        
     $cleanings= $store->cleaning()->orderBy('ID', 'DESC')
     ->where('created_at', "LIKE",  "%$month2%")
     ->get();

   // $store = Store::find($id);
    
   // $cleanings= $store->cleaning()->name($request->get('name'))->orderBy('ID', 'DESC')->get();

   

   $pdf = PDF::loadView('pdfs.cleanings', ['cleanings' => $cleanings] );

  // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

return $pdf->download('Limpiezasanitizacion.pdf');


}
}




