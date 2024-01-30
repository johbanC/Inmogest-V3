<?php

use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Reorderable;
/*IMPORTAR EL MODELO PARA PODERLO UTILIZAR. PERO DESPUESDE AGREGAR EL 
[InventarioController::class, 'index'] 
YA NO ES NECESARIO
use App\Models\Inventario;
*/

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/test', function () {
    return view('test.test');
});




Route::get('/inventarios', [InventarioController::class, 'index'])
    ->name('inventarios.index');





Route::get('/inventarios/new', function () {
    return view('inventarios.new');
})->name('inventarios.new');


Route::post('/inventarios/new', [InventarioController::class, 'store'])
    ->name('inventarios.store');