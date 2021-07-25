@extends('RecursosHumanos.layout')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1 id="" class="IdentificadorIndex">Recusos humanos-Pregrado</h1>  
            <a href="#"><i class="fas fa-file-excel"> Generar XLS</i></a>  
            <!-- Button trigger modal -->
        
            
            </div>
        </div>
      
        <div class="accordion accordion-secondary">
           
            {{-- Personal Academico --}}
            @include('RecursosHumanos.Pregrado.PersonalAcademicoCollapse')

           {{-- Personal administrativo y obrero --}}
           @include('RecursosHumanos.Pregrado.PersonalAyOCollapse')
           
        </div>


    </div>
</div>


@endsection