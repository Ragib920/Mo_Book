<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;


Route::get('/',[FrontController::class,'indexView']);

//===================================
//provider
//===================================

//Admin Authentication
Route::group(['prefix' => 'provider'], function () {
    Route::get('login',[ProviderController::class,'LoginView']);
    Route::post('login',[ProviderController::class,'LogIn'])->name('provider.login');
    Route::get('register',[ProviderController::class,'RegisterView']);
    Route::post('register',[ProviderController::class,'Registration'])->name('provider.register');
    Route::get('logout',[ProviderController::class,'onLogout']);
});

//Admin Routes
Route::group(['prefix' => 'provider','middleware' => 'provider_auth'], function () {
    Route::get('dashboard', [ProviderController::class, 'DashboardView']);
});

