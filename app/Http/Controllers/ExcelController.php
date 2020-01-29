<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use  App\Store;
use  App\Solidwaste;
use  App\Plant;
use  App\Cleaning;




use App\Exports\SolidwastesExport;
use App\Exports\PlantsExport;
use App\Exports\CleaningsExport;

use Maatwebsite\Excel\Facades\Excel;



use Illuminate\Support\Facades\DB;



class ExcelController extends Controller
{
    public function solidwaste( store $store, Solidwaste $solidwaste) 
    {


        $month2 =  date('Y-m', strtotime($solidwaste->created_at));
      
        
        // $solidwastes= $store->solidwaste()->name($request->get('name'))->paginate();
        $solidwastes= $store->solidwaste()->orderBy('ID', 'DESC')
        ->where('created_at', "LIKE",  "%$month2%")
        ->get();

        //return Excel::download(new NotasExport, 'empleados.xlsx');
       // return (new  NotasExport($cursos))->download('cursos.tsv', \Maatwebsite\Excel\Excel::TSV);
        // $cursos = $curso->id;
        // return (new NotasExport(2019))->download('invoices.xlsx');

       
      return Excel::download(new SolidwastesExport($solidwastes), 'solidwastes.xlsx');
    }


    public function plants( store $store, $id) 
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
      

        
       
      return Excel::download(new PlantsExport($plants), 'plants.xlsx');
    }



    public function cleanings( store $store, Cleaning $cleaning) 
    {


      //$cleaningdate = Cleaning::find($id);

      $month2 =  date('Y-m-d', strtotime($cleaning->created_at));
 
 
      $store = Store::find($store ->id);
      $cleanings= $store->cleaning() 
      ->where('created_at', "LIKE",  "%$month2%")
      ->orderBy('ID', 'DESC')
      ->get();

       
      return Excel::download(new CleaningsExport($cleanings), 'cleanings.xlsx');
    }

}
