<?php
namespace App\Exports;

use App\solidwaste;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromView;\Concerns\FromCollection;


use Maatwebsite\Excel\Concerns\Exportable;
class SolidwastesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */


    use Exportable;
 
    protected $solidwastes;
 
    public function __construct($solidwastes = null)
    {
        $this->solidwastes = $solidwastes;
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('excels.solidwastes', [
            'solidwastes' => $this->solidwastes
        ]);
    }

    // public function collection()
    // {
    //     return $this->notas ?: Curso::all();
    // }

}