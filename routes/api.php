<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\API\CustomerAPIController;


Route::get('/customers', [CustomerAPIController::class, 'index']);
Route::get('/customers/create', [CustomerAPIController::class, 'create']); 
Route::post('/customers/store', [CustomerAPIController::class, 'store']); 