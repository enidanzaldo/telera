<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSystem;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('index');
});
*/



Route::name('indexGrupos')->get('/indexGrupos',[ControllerSystem::class,'indexGrupos']);
Route::name('indexAlumnos')->get('/indexAlumnos',[ControllerSystem::class,'indexAlumnos']);
Route::name('Crearalumno')->get('/Crearalumno',[ControllerSystem::class,'detallesAlumno']);
Route::post('/almacenarAlumno',[ControllerSystem::class,'almacenarAlumno'])->name('almacenarAlumno');
Route::name('Creargrupo')->get('/Creargrupo',[ControllerSystem::class,'detallesGrupo']);
Route::name('almacenarGrupo')->post('/Grupos',[ControllerSystem::class,'storegrupos']);