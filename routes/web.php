<?php

use App\Exports\UsersExport;
use App\Http\Controllers\PersonalAcademicoController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;


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

Route::resource('personalacademico', PersonalAcademicoController::class);
Route::post('/addingpersonalacademico', [PersonalAcademicoController::class, 'store'])->name('add.PersonalAcademico');

Route::get('/xxx', [PersonalAcademicoController::class, 'export'])->name('export.x');


Route::get('/', function () {
    return view('welcome');

    
    

});
