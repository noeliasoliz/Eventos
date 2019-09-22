<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('usuarios', 'usuarioController');Route::resource('devolucions', 'DevolucionController');Route::resource('articulos', 'ArticuloController');Route::resource('paquetes', 'PaqueteController');Route::resource('dev_articulos', 'Dev_ArticuloController');Route::resource('detalle_paquetes', 'Detalle_PaqueteController');Route::resource('detalle_art_notas', 'Detalle_Art_NotaController');Route::resource('clientes', 'clienteController');Route::resource('administradors', 'AdministradorController');Route::resource('evaluacions', 'EvaluacionController');Route::resource('notas', 'NotaController');Route::resource('salons', 'SalonController');Route::resource('anticipos', 'AnticipoController');Route::resource('detalle_personals', 'Detalle_PersonalController');Route::resource('pagos', 'PagoController');Route::resource('personals', 'PersonalController');Route::resource('decoracions', 'DecoracionController');