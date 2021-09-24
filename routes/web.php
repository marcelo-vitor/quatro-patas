<?php

use App\Http\Controllers\{
    CaninoController,
    RacaController
};
use Illuminate\Support\Facades\Route;


// Caninos
Route::get('/', [CaninoController::class, 'index'])->name('canino.index');

Route::get('/canino/create', [CaninoController::class, 'create'])->name('canino.create');
Route::post('/canino/store', [CaninoController::class, 'store'])->name('canino.store');

Route::get('/canino/update/{canino}', [CaninoController::class, 'update'])->name('canino.update');
Route::put('/canino/edit/{canino}', [CaninoController::class, 'edit'])->name('canino.edit');

Route::delete('/canino/destroy/{canino}', [CaninoController::class, 'destroy'])->name('canino.destroy');

// Raças
Route::get('/raca', [RacaController::class, 'index'])->name('raca.index');

Route::get('/raca/create', [RacaController::class, 'create'])->name('raca.create');
Route::post('/raca/store', [RacaController::class, 'store'])->name('raca.store');

Route::get('/raca/update/{raca}', [RacaController::class, 'update'])->name('raca.update');
Route::put('/raca/edit/{raca}', [RacaController::class, 'edit'])->name('raca.edit');

Route::delete('/raca/destroy/{raca}', [RacaController::class, 'destroy'])->name('raca.destroy');
