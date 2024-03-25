<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\SolicitudController;
Route::get('/', function(){
    return('app');
})
->name('aplication');
Route:: get('phpmyinfo', function(){
phpinfo();
})->name('phpmyinfo');

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


Route::get('/landing', function () {
    return view('landing');
});

Route::resource('servicios', ServiciosController::class);
Route::resource('solicitudes', SolicitudController::class);
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('login.google.callback');

Route::get('login/github', [LoginController::class, 'redirectToGitHub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGitHubCallback'])->name('login.github.callback');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
