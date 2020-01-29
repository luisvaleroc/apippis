<?php
namespace App\Exports;

use App\Cleaning;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromView;\Concerns\FromCollection;


use Maatwebsite\Excel\Concerns\Exportable;
class CleaningsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */


    use Exportable;
 
    protected $cleanings;
 
    public function __construct($cleanings = null)
    {
        $this->cleanings = $cleanings;
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('excels.cleanings', [
            'cleanings' => $this->cleanings
        ]);
    }

    // public function collection()
    // {
    //     return $this->notas ?: Curso::all();
    // }

}