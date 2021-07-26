<?php

use App\Exports\UsersExport;
use App\Http\Controllers\PersonalAcademicoPreController;
use App\Http\Controllers\PersonalAdministratObreroPreController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
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

Route::resource('pa_pregrado', PersonalAcademicoPreController::class);
Route::resource('pao_pregrado', PersonalAdministratObreroPreController::class);
Route::resource('registro_p_postgrado', PersonalAcademicoPostGController::class);
Route::resource('registro_paobrero_postgrado', PersonalAdmObreroPostGController::class);

Route::post('/addingpersonalacademico', [PersonalAcademicoPreController::class, 'store'])->name('add.PersonalAcademicoPregrado');
Route::post('/addingpao_pregrado', [PersonalAdministratObreroPreController::class, 'store'])->name('add.PaoPregrado');

Route::get('/xxx', [PersonalAcademicoPreController::class, 'export'])->name('export.x');


Route::get('/', function () {
    return view('welcome');

    
    

});
