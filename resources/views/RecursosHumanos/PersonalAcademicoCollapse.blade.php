<div class="card">
    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <div class="span-icon">
            <i class="fas fa-user-graduate"></i>

        </div>
        <div class="span-title">
           Personal Académico 
        </div>
        <div class="span-mode"></div>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
           
            <div class="Header_InsideCollapse">
                <div class="barra">
                <h1 id="tablax">Datos del Personal Académico</h1>    
                <!-- Button trigger modal -->
                <a href="#" class="btn_agregar_estrategia" data-toggle="modal" data-target="#AgregarPersonalAcademico"> <i class="fas fa-plus"> Añadir nuevo</i></a>
                
                </div>
            </div>



   {{-- llamado del modal --}}
                <!-- Modal data insertion  -->
                <div class="modal fade" id="AgregarPersonalAcademico" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Personal Académico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form id="InsertPersonalAcademico" > 
                                    {{ csrf_field() }}

   
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="InputCod_Institucion">Código de la institución</label>
                                        <input type="text" class="form-control" name="InputCod_Institucion" placeholder="Código de la institución">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Fecha">Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="Fecha_Ingreso" placeholder="Fecha de ingreso">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Pais">País</label>
                                        <input type="text" class="form-control" name="pais_p_academico" placeholder="País">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="CondicionLaboral">Condición Laboral</label>
                                        <input type="text" class="form-control" name="CondicionLaboral" placeholder="Condición Laboral">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Documento_ID">Documento de Identificación</label>
                                        <input type="text" class="form-control" name="Documento_ID" placeholder="Documento de Identificación">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="CategoriaP_A">Categoría</label>
                                        <input type="text" class="form-control" name="CategoriaP_A" placeholder="Categoria">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                        <input type="text" class="form-control" name="NroCedula" placeholder="Ejemplo: V-1234567">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Cat_Inicial">Categória Inicial</label>
                                        <input type="text" class="form-control" name="Cat_Inicial" placeholder="Categória Inicial">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" name="Nombres_P_Academico" placeholder="Ejem: Jossep Argenis">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="Apellidos" placeholder="Ejem:Paredes Valero">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="TiempodeDedicacion">Tiempo de Dedicación</label>
                                        <input type="text" class="form-control" name="TiempoDedicacion" placeholder="Tiempo de Dedicación">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="TiempoAcademico">Título Académico</label>
                                        <input type="text" class="form-control" name="TituloAcademico" placeholder="Título Académico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Sexo</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Sexo_PersonalAcademico" required>

                                            <option selected>Seleccionar </option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                        </select>
                                       
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Profesion">Profesión</label>
                                        <input type="text" class="form-control" name="Profesion" placeholder="Profesión">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="FNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="FNacimiento" placeholder="Password">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Adscripción">Adscripción</label>
                                        <input type="Adscripción" class="form-control" name="Adscripción" placeholder="Adscripción">
                                    </div>

                                </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" id="butsave" >Añadir</button>
                                    </div>
    
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
            


            <table id="fa_table" class="display table table-striped table-hover table-boder-radius serial">
                <thead>
                    {{-- insertion of items --}}
                    <tr>
                        <th>Nº ítem</th>
                        <th>Descripción</th>   
                        <th>Fecha</th>
                        <th>Acciones</th>                                         
                    </tr>
                </thead>
                {{--database data subtraction --}}
                <tbody>         
                {{-- Data extraction from database --}}
              
                @foreach($PersonalAcademico as $P_Academico)
                <tr>
                   <td class="nro_item_center" id="tr_">
                      <div id="" class="nro_item"> </div>
                    </td>
                    
                    <td>
                    <span class="spanbold">Código de la institución:</span> {{$P_Academico->Institucion_code}} <br>
                    <span class="spanbold">País:</span> {{$P_Academico->Pais}} <br>
                    <span class="spanbold">Documento de Identificación:</span> {{$P_Academico->Documento_De_Identificacion}} <br>
                    <span class="spanbold">Numero de Cédula/Pasaporte:</span> {{$P_Academico->CI}} <br>
                    <span class="spanbold">Apellidos:</span> {{$P_Academico->Apellidos}} <br>
                    <span class="spanbold">Nombres:</span> {{$P_Academico->Nombres}}  <br>
                    <span class="spanbold">Sexo: </span>  {{$P_Academico->Sexo}}    <br>
                    <span class="spanbold">Fecha de Nacimiento:</span> {{$P_Academico->Fecha_Nacimiento}}  <br>
                    <span class="spanbold">Fecha de Ingreso:</span> {{$P_Academico->Fecha_Ingreso}}  <br>
                    <span class="spanbold">Condición Laboral:</span> {{$P_Academico->Condicion_Laboral}}  <br>
                    <span class="spanbold">Categoría:</span> {{$P_Academico->Categoria}}  <br>
                    <span class="spanbold">Categoría Inicial:</span> {{$P_Academico->Categoria_Inicial}}  <br>
                    <span class="spanbold">Tiempo de Dedicación:</span> {{$P_Academico->Tiempo_Dedicacion}}  <br>
                    <span class="spanbold">Título Académico:</span> {{$P_Academico->TituloAcademico}}  <br>
                    <span class="spanbold">Profesión:</span> {{$P_Academico->Profesion}}  <br>
                    <span class="spanbold">Adscripción:</span> {{$P_Academico->Adscripcion}}  <br><br>
                    </td>
               
                    <td>{{$P_Academico->created_at->format('d/m/Y')}}</td>
               

                    <td>
                        <form action="{{route ('personalacademico.destroy', $P_Academico->id)}}" method="POST">
                        <div class="form-button-action">    
                        {{-- comment
                         <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editFortaleza{{$fortaleza->id}}"><i class="fa fa-edit"></i></a>
                             --}}
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-link btn-danger" title="Eliminar" type="submit" >
                            <i class="fa fa-times"></i>
                        </button>
                        
                        </div>
                        </form>
        
                    </td>



                </tr>

                

                @endforeach
            
            


                </tbody>
            </table>
        </div>
    </div>
</div>

<script>


    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    


    
     $('#InsertPersonalAcademico').on('submit', function(e) {
        e.preventDefault();
       
        let InputCod_Institucion = $('input[name=InputCod_Institucion]').val();
        let Fecha_Ingreso = $('input[name=Fecha_Ingreso]').val();        
        let CondicionLaboral = $('input[name=CondicionLaboral]').val();
        let Documento_ID = $('input[name=Documento_ID]').val();
        let CategoriaP_A = $('input[name=CategoriaP_A]').val();
        let NroCedula = $('input[name=NroCedula]').val();
        let Cat_Inicial = $('input[name=Cat_Inicial]').val();
        let Nombres_P_Academico = $('input[name=Nombres_P_Academico]').val();
        let Apellidos = $('input[name=Apellidos]').val();
        let TiempoDedicacion = $('input[name=TiempoDedicacion]').val();
        let TituloAcademico = $('input[name=TituloAcademico]').val();
        let Sexo_PersonalAcademico = $('select[name=Sexo_PersonalAcademico]').val();
        let Profesion = $('input[name=Profesion]').val();
        let FNacimiento = $('input[name=FNacimiento]').val();
        let Adscripcion = $('input[name=Adscripción]').val();
        let Pais = $('input[name=pais_p_academico]').val();
        
        
        //console.log(FNacimiento);
        
    
          /*  $("#butsave").attr("disabled", "disabled"); */
            $.ajax({
                url:"{{route('add.PersonalAcademico')}}",
                type: "POST",
                data: {
                    InputCod_Institucion: InputCod_Institucion,
                    CondicionLaboral:CondicionLaboral,
                    Documento_ID:Documento_ID,
                    CategoriaP_A:CategoriaP_A,
                    NroCedula:NroCedula,
                    Cat_Inicial:Cat_Inicial,
                    Nombres_P_Academico:Nombres_P_Academico,
                    Apellidos:Apellidos,
                    TiempoDedicacion:TiempoDedicacion,
                    TituloAcademico:TituloAcademico,
                    Sexo_PersonalAcademico:Sexo_PersonalAcademico,
                    Profesion:Profesion,
                    FNacimiento:FNacimiento,
                    Adscripcion:Adscripcion,  
                    Pais:Pais,
                    Fecha_Ingreso:Fecha_Ingreso,

                  
                },
    
                success:function(response){
                    console.log(response)
                    window.location.replace("/personalacademico");
                    
                }, 
                    error:function(error){
                    console.log(error)
                    alert('data no saved');
                }    
         });
    });



</script>