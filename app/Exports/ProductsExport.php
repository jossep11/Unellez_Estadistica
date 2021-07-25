<?php

namespace App\Exports;

use App\Models\PersonalAcademico;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{

    public function view(): View{
        return view('ExportsExcel.PersonalAcademico', [
            'PersonalAcademico'=> PersonalAcademico::get()
            

        ]);
        
    }
   
}
