<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IngredientesController;


Route::get('', [Homecontroller::class, 'index'])->name('admin.home');

Route::resource('ingredientes', IngredientesController::class)->names('admin.ingredientes');
