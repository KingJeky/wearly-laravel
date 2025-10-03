<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sesi', [SessionController::class, 'index']); 
Route::post('/sesi/login', [SessionController::class, 'login']); 