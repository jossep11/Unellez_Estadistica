<?php

use App\Exports\UsersExport;
use App\Http\Controllers\PersonalAcademicoPreController;
use App\Http\Controllers\PersonalAdministratObreroPreController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Http\Controllers\Login_Estadistica;
use App\Http\Controllers\PersonalAcademicoPostGController;
use App\Http\Controllers\PersonalAdmObreroPostGController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//done
Route::post('estadisticalogout', 'App\Http\Controllers\Login_Estadistica@prueba')->name('logout');
Route::resource('estadistica', Login_Estadistica::class)->middleware('guest');

Route::resource('pa_pregrado', PersonalAcademicoPreController::class);
Route::resource('pao_pregrado', PersonalAdministratObreroPreController::class);

//pregrado ajax
//done
Route::post('/addingpersonalacademico', [PersonalAcademicoPreController::class, 'store'])->name('add.PersonalAcademicoPregrado');
Route::post('/addingpao_pregrado', [PersonalAdministratObreroPreController::class, 'store'])->name('add.PaoPregrado');








//postgrado ajax
Route::post('/addingpersonalacademicopostg', [PersonalAcademicoPostGController::class, 'store'])->name('add.PersonalAcademicoPostGrado');
// this crud is done
// this crud is done
//POSTGRADO
Route::resource('registro_p_postgrado', PersonalAcademicoPostGController::class);
//done






//this have left
Route::resource('registro_paobrero_postgrado', PersonalAdmObreroPostGController::class);
//ajax
Route::post('/addinadmpost', [PersonalAdmObreroPostGController::class, 'store'])->name('add.admpost');













//excel Personal academico y obrero PREGRADO
Route::get('/Reporte_Pregrado', [PersonalAcademicoPreController::class, 'export'])->name('export.x');



//Excel Personal Academico y Obrero POSTGRADO

Route::get('/Reporte_Postgrado', [PersonalAdmObreroPostGController::class, 'export2'])->name('export.post');


Route::get('/', function () {
    return view('welcome');

    
    

});
