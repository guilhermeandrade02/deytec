<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\IndexController;
/*

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
    Route::get('/index', [IndexController::class, 'index'])->name('index');;
    Route::get('/empresa', [IndexController::class, 'company'])->name('company');
    Route::get('/manutencao',[IndexController::class, 'manutencao'])->name('manutencao');
    Route::get('/instalacao',[IndexController::class, 'instalacao'])->name('instalacao');
    Route::get('/contato',[IndexController::class, 'contato'])->name('contato');
    Route::get('/manutenção-chiller',[IndexController::class, 'manutencaoChiller'])->name('manutenção-chiller');