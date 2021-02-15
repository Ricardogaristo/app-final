<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


/*Ruta principal del proyecto será el index*/
Route::view('/','index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/contact','contact')->name('contact');
Route::view('/admin/addperson','/admin/addperson')->name('addperson');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user',[\App\Http\Controllers\HomeController::class, 'getUser']);
Route::post('/admin/addperson', [\App\Http\Controllers\PagesController::class, 'store'])->name('notas.crear');
