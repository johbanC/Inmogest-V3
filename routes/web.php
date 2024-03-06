<?php

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FichaTecnica;
use App\Http\Controllers\FichaTecnicaController;
use App\Http\Controllers\TipoTransaccionController;
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


//para ingresar al controlador 
Route::get('/transacciones', 'TipoTransaccionController@index');




Route::get('/fichastecnicas', [FichaTecnicaController::class, 'index'])
    ->name('fichastecnicas.index');


Route::get('/fichastecnicas/new', [FichaTecnicaController::class, 'create'])
    ->name('fichastecnicas.new');

// Route::get('/fichastecnicas/new', function(){
//     return view('fichastecnicas.new');
// })->name('fichastecnicas.new');

Route::post('/fichastecnicas/new', [FichaTecnicaController::class, 'store'])
    ->name('fichastecnicas.store');

Route::get('/fichastecnicas/{fichastecnicas}/edit', [FichaTecnicaController::class, 'edit'])
    ->name('fichastecnicas.edit');
