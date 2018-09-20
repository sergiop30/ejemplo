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

Route::get('/inicio', function () {
    return view('Bienvenida');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/materias', 'MateriaController@index');
Route::get('/materias/create/{id}', 'MateriaController@create');
Route::get('/materias/show/{id}', 'MateriaController@show');*/

Route::resource('materia', 'MateriaController');

Route::get('/usuarios', 'UsuarioController@index');
Route::get('/alumnos', 'AlumnoController@index');
Route::get('/empleados', 'EmpleadoController@index');
Route::get('/dependencias', 'DependenciaController@index');


