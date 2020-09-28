<?php

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
    return view('welcome');
});

/* Route::get('fotos/{numero?}', function($numero = 'sin numero'){ 
    return 'Estas en la galería de fotos :' .$numero;

})->where('numero', '[0-9]+');
*/
Route::get('blog', function () {
    return view('blog');
})->name('noticias');

Route::get('fotos', function () {
    return view('fotos');
})->name('foto');

Route::get('nosotros/{nombre?}',function($nombre=null){ //el signo significa que puede ser opcional el nombre escrito en la url
    $equipo=['Chuerk', 'Fiona', 'Burro']; /*Array que podríamos usar para datos de BD -->*/
    //return view('nosotros', ['equipo'=>$equipo, 'nombre'=>$nombre]);
    return view('nosotros', compact('equipo', 'nombre'));//Esta es otra opción para usar arrays -compact-
})->name('nosotros');
