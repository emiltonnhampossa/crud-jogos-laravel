<?php

use App\Http\Controllers\JogosController as ControllersJogosController;
use Illuminate\Support\Facades\Route;

Route::prefix('jogos')-> group(function(){
    Route::get('/', [ControllersJogosController::class,'index'])->name('jogos-index');
    Route::get('/create', [ControllersJogosController::class,'create'])->name('jogos-create');
    Route::post('/', [ControllersJogosController::class,'store'])->name('jogos-store');
    Route::get('/{id}/edit', [ControllersJogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [ControllersJogosController::class,'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [ControllersJogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});

Route::fallback((function(){
    return "Erro!";
}));


