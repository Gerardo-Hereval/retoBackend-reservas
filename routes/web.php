<?php

use App\Models\activity;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusquedaController;

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

Route::get('/', function () {
    $sugerencia = activity::where('status','activo')->where('id',random_int(1,4))->get();
    return view('welcome',['sugerencia'=>$sugerencia]);
});

Route::get('/busqueda', [BusquedaController::class,'index'])->name('busqueda');
Route::post('/reservacion/{id}/{reservacion}/{personas}', [BusquedaController::class,'store'])->name('reservacion');
Route::get('/reservaciones', [BusquedaController::class,'show'])->name('reservaciones');
Route::get('/test', [BusquedaController::class,'create'])->name('test');
