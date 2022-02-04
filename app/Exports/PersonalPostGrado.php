<?php

namespace App\Exports;

use App\Models\PersonalAcademicoPostGrado;
use App\Models\PersonalAdm_ObreroPostGrado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{

    public function view(): View{
        return view('ExportsExcel.PersonalPostGrado', [
            'PersonalAcademico'=> PersonalAcademicoPostGrado::get(),
            'PersonalPersonalAdm_Obrero'=> PersonalAdm_ObreroPostGrado::get(),
            
            

        ]);
        
    }
   
}
