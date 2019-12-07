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

Route::get('prueba/{nombre?}', ['as'=>'mi_url',function($nombre="Valor por default"){
    return view('prueba', compact('nombre'));
}])->where('nombre', "[a-z]+");

Route::get('blade', function(){
    $elementos = ["Robe", "Migue", "Josue", "Son gays"];
    
    return view('primera', compact('elementos'));

});

Route::resource('aulas', 'AulaController');
Route::resource('edificios', 'EdificioController');