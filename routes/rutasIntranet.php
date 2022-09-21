<?php

use Illuminate\Support\Facades\Route;

Route::get('/home-intranet', [App\Http\Controllers\HomeIntranetController::class, 'index'])->name('home-intranet');