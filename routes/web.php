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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

#Crea las tres rutas principales
Route::resource('reservacion', 'ReservacionController');
Route::resource('cliente', 'ClienteController');
Route::resource('habitacion', 'HabitacionController');
Route::resource('servicio', 'ServicioController');
Route::resource('producto', 'ProductoController');


//Route::verbo('ruta_definir', 'controlador@metodo_del_controladro')->name('nombre');
Route::get('cliente/reporte/mostrar', 'ClienteController@reporte')->name('cliente.reporte');
Route::get('reservacion/reporte/mostrar', 'ReservacionController@reporte')->name('reservacion.reporte');
