<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorForm;

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

/// vistas rutas

Route::controller( ControladorForm::class )->group(
    function () {
    Route::get('formulario', 'gotoFormulario') ->name('form');
    Route::get('tabla', 'gotoTabla')->name('table');
}
);

///request por POST

Route::post('enviarForm', [ControladorForm::class, 'procesarForm']);



