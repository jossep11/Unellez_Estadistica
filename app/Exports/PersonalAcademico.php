<?php

namespace App\Exports;

use App\Models\PersonalAcademico;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersonalAcademico implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PersonalAcademico::all();
    }
}
