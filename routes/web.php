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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Rutas para el administrador
Route::get('/admin', function() {
    return view('admin.index');
});


// Rutas para el administrador - Prendas
// Route::get('/admin/prendas', [\App\Http\Controllers\PrendaController::class, 'index']);

// Route::get('/admin/prendas/create', [\App\Http\Controllers\PrendaController::class, 'create']);

Route::resource('/admin/prendas', \App\Http\Controllers\PrendaController::class);

Route::resource('/admin/users', \App\Http\Controllers\UserController::class);

Route::resource('/favorito', \App\Http\Controllers\FavoritoController::class);

Route::get('/', [\App\Http\Controllers\PrendaController::class, 'cargar_prendas']);

Route::get('/prenda/{id}', [\App\Http\Controllers\PrendaController::class, 'datos_prenda']);

Route::get('/buscar', [\App\Http\Controllers\PrendaController::class, 'buscar_prenda']);

