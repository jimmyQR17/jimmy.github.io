<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [App\Http\Controllers\AlumnoController::class,'index'])->name('home'); 


Route::post('/alumno/store', [App\Http\Controllers\AlumnoController::class,'store'])->name('alumno.store'); 
Route::delete('/alumno/delete/{id}', [App\Http\Controllers\AlumnoController::class,'delete'])->name('alumno.delete'); 
Route::put('/alumno/update/{id}', [App\Http\Controllers\AlumnoController::class,'update'])->name('alumno.update'); 
Route::get('/alumno/{id}', 'AlumnoController@edit');