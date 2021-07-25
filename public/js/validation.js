//

$('select[name=Documento_ID]').on('click', function(e) {
let Documento_P_Academico_Pregrado = $('select[name=Documento_ID]').val();
console.log(Documento_P_Academico_Pregrado)

if(Documento_P_Academico_Pregrado==='C'){
   let inputnrocedulaPAPregrado = document.querySelector('input[name=NroCedula]');
   inputnrocedulaPAPregrado.value='';
   inputnrocedulaPAPregrado.disabled=false;

    $('input#NroCedula').keypress(function (event) {
        if (event.which < 48 || event.which > 57 || this.value.length === 8) {
          return false;
        }
      });
    
}

 if(Documento_P_Academico_Pregrado==='P'){
    let inputnrocedulaPAPregrado = document.querySelector('input[name=NroCedula]');
    inputnrocedulaPAPregrado.value='';
    inputnrocedulaPAPregrado.disabled=false;
    $('input#NroCedula').keypress(function (event) {
        if (event.which < 48 || event.which > 57 || this.value.length === 9) {
          return false;
        }
      });
    
}


});

