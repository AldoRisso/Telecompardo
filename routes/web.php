<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\ContrataloController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use Faker\Guesser\Name;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NormativasController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PruebasController;

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

Route::get('/', HomeController::class); 

Route::get('/inicio', IndexController::class)->name("inicio");

Route::get('/nosotros', NosotrosController::class)->name("nosotros");

Route::get('/contactanos', ContactanosController::class)->name("contactanos");

Route::get('/normativas', NormativasController::class)->name("normativas");

Route::get('/pruebas', PruebasController::class)->name("pruebas");

Route::get('/contratalo', ContrataloController::class)->name("contratalo");

Route::post('contactanos', [ContactanosController::class, "store"])->name("contactanos.store");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
