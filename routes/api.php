<?php

use Illuminate\Support\Facades\Route;
use Luinuxscl\OptionPackage\Http\Controllers\OptionController;

Route::middleware('api')->prefix('options')->group(function () {
    Route::get('/', [OptionController::class, 'index']);
    Route::post('/', [OptionController::class, 'store']);
    Route::delete('/{option}', [OptionController::class, 'destroy']);
});
