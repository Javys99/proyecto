<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerrosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuariosController;
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
    return view('welcome');
});



Route::get('prueba/index',[UsuariosController::class,'index'])->name('prueba.index');
Route::get('prueba/perro',[PerrosController::class,'perros'])->name('prueba.perro');
Route::get('prueba/perrosvista', [UsuariosController::class, 'dueñoperro'])->name('prueba.perrosvista');
Route::get('login/registro',[RegisterController::class,'register'])->name('login.registro');
Route::post('login/registro',[RegisterController::class,'register'])->name('login.registro');
Route::get('login/login',[LoginController::class,'show'])->name('login.login');
Route::post('login/login',[LoginController::class,'login'])->name('login.login');
Route::get('login/home',[HomeController::class,'index'])->name('login.home');