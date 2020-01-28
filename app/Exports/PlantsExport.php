<?php
namespace App\Exports;

use App\solidwaste;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromView;\Concerns\FromCollection;


use Maatwebsite\Excel\Concerns\Exportable;
class PlantsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */


    use Exportable;
 
    protected $plants;
 
    public function __construct($plants = null)
    {
        $this->plants = $plants;
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('excels.plants', [
            'plants' => $this->plants
        ]);
    }

    // public function collection()
    // {
    //     return $this->notas ?: Curso::all();
    // }

}