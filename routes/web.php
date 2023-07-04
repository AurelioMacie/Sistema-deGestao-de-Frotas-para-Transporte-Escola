<?php

use App\Http\Controllers\EscolaController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ManutencaoController;
use App\Http\Controllers\RotaController;
use App\Http\Controllers\EstudanteController;
use Illuminate\Support\Facades\Route;


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

@include_once('admin_web.php');

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

Route::view('sample-page', 'admin.pages.sample-page')->name('sample-page');

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'admin.dashboard.default')->name('index');
    Route::view('default', 'admin.dashboard.default')->name('dashboard.index');
});

Route::view('default-layout', 'multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'multiple.modern-layout')->name('modern-layout');


Route::prefix('escola')->group(function(){
	Route::get('/', [EscolaController::class, 'index'])->name('escola');
    Route::get('/create', [EscolaController::class, 'create'])->name('escola-create');
    Route::post('/', [EscolaController::class, 'store'])->name('escola-store');
    Route::get('/{id}/edit', [EscolaController::class, 'edit'])->name('escola-edit');
    Route::put('/{id}', [EscolaController::class, 'update'])->name('escola-update');
    Route::delete('/{id}', [EscolaController::class, 'destroy'])->name('escola-destroy');
});

Route::prefix('oficina')->group(function(){
    Route::get('/', [OficinaController::class, 'index'])->name('oficina');
    Route::get('/create', [OficinaController::class, 'create'])->name('oficina-create');
    Route::post('/', [OficinaController::class, 'store'])->name('oficina-store');
    Route::get('/{id}/edit', [OficinaController::class, 'edit'])->name('oficina-edit');
    Route::put('/{id}', [OficinaController::class, 'update'])->name('oficina-update');
    Route::delete('/{id}', [OficinaController::class, 'destroy'])->name('oficina-destroy');
});

Route::prefix('motorista')->group(function(){
    Route::get('/', [MotoristaController::class, 'index'])->name('motorista');
    Route::get('/create', [MotoristaController::class, 'create'])->name('motorista-create');
    Route::post('/', [MotoristaController::class, 'store'])->name('motorista-store');
    Route::get('/{id}/edit', [MotoristaController::class, 'edit'])->name('motorista-edit');
    Route::put('/{id}', [MotoristaController::class, 'update'])->name('motorista-update');
    Route::delete('/{id}', [MotoristaController::class, 'destroy'])->name('motorista-destroy');
});


Route::prefix('veiculo')->group(function(){
    Route::get('/', [VeiculoController::class, 'index'])->name('veiculo');
    Route::get('/create', [VeiculoController::class, 'create'])->name('veiculo-create');
    Route::post('/', [VeiculoController::class, 'store'])->name('veiculo-store');
    Route::get('/{id}/edit', [VeiculoController::class, 'edit'])->name('veiculo-edit');
    Route::put('/{id}', [VeiculoController::class, 'update'])->name('veiculo-update');
    Route::delete('/{id}', [VeiculoController::class, 'destroy'])->name('veiculo-destroy');
});

Route::prefix('manutencao')->group(function(){
    Route::get('/', [ManutencaoController::class, 'index'])->name('manutencao');
    Route::get('/create', [ManutencaoController::class, 'create'])->name('manutencao-create');
    Route::post('/', [ManutencaoController::class, 'store'])->name('manutencao-store');
    Route::get('/{id}/edit', [ManutencaoController::class, 'edit'])->name('manutencao-edit');
    Route::put('/{id}', [ManutencaoController::class, 'update'])->name('manutencao-update');
    Route::delete('/{id}', [ManutencaoController::class, 'destroy'])->name('manutencao-destroy');
});

Route::prefix('rota')->group(function(){
    Route::get('/', [RotaController::class, 'index'])->name('rota');
    Route::get('/create', [RotaController::class, 'create'])->name('rota-create');
    Route::post('/', [RotaController::class, 'store'])->name('rota-store');
    Route::get('/{id}/edit', [RotaController::class, 'edit'])->name('rota-edit');
    Route::put('/{id}', [RotaController::class, 'update'])->name('rota-update');
    Route::delete('/{id}', [RotaController::class, 'destroy'])->name('rota-destroy');
});

Route::prefix('estudante')->group(function(){
    Route::get('/', [EstudanteController::class, 'index'])->name('estudante');
    Route::get('/create', [EstudanteController::class, 'create'])->name('estudante-create');
    Route::post('/', [EstudanteController::class, 'store'])->name('estudante-store');
    Route::get('/{id}/edit', [EstudanteController::class, 'edit'])->name('estudante-edit');
    Route::put('/{id}', [EstudanteController::class, 'update'])->name('estudante-update');
    Route::delete('/{id}', [EstudanteController::class, 'destroy'])->name('estudante-destroy');
});
