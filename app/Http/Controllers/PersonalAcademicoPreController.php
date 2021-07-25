<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use Illuminate\Http\Request;
use App\Models\PersonalAcademico;
use App\Exports\UsersExport;
use App\Models\PersonalAdm_Obrero;
use Maatwebsite\Excel\Facades\Excel;

class PersonalAcademicoPreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PersonalAcademico = PersonalAcademico::all();
        $PersonalAdm_Obrero= PersonalAdm_Obrero::all();
       return view('RecursosHumanos.Pregrado.P_Acad_Pregrado')->with('PersonalAcademico', $PersonalAcademico)
       ->with('PersonalAdm_Obrero', $PersonalAdm_Obrero);
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
        
        
        $PersonalAcademico = new PersonalAcademico();
        
        $PersonalAcademico->Institucion_code=$request->InputCod_Institucion;
        $PersonalAcademico->Pais=$request->Pais;
        $PersonalAcademico->Documento_De_Identificacion=$request->Documento_ID;
        $PersonalAcademico->CI=$request->NroCedula;
        $PersonalAcademico->Apellidos=$request->Apellidos;
        $PersonalAcademico->Nombres=$request->Nombres_P_Academico;
        $PersonalAcademico->Sexo=$request->Sexo_PersonalAcademico;
        $PersonalAcademico->Fecha_Nacimiento=$request->FNacimiento;
        $PersonalAcademico->Fecha_Ingreso=$request->Fecha_Ingreso;
        $PersonalAcademico->Condicion_Laboral=$request->CondicionLaboral;
        $PersonalAcademico->Categoria=$request->CategoriaP_A;
        $PersonalAcademico->Categoria_Inicial=$request->Cat_Inicial;    
        $PersonalAcademico->TituloAcademico=$request->TituloAcademico;    
        $PersonalAcademico->Tiempo_Dedicacion=$request->TiempoDedicacion; 
        $PersonalAcademico->Profesion=$request->Profesion;    
        $PersonalAcademico->Adscripcion=$request->Adscripcion;    
        
       
        $PersonalAcademico->save();
      
        return response()->json($PersonalAcademico);
       
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
        $PersonalAcademico = PersonalAcademico::find($id);
        $PersonalAcademico->delete();
        return redirect('/pa_pregrado');
    }



    public function export()  
    {
        return Excel::download(new ProductsExport, 'PersonalAcademico.xlsx');
    }



}
