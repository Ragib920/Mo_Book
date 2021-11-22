<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PhotographyController;
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

    //    ==========details========
    Route::get('details',[DetailsController::class,'DetailsView']);
    Route::get('details/manage_details',[DetailsController::class,'ManageDetailsView']);
    Route::post('details/manage_details_process',[DetailsController::class,'ManageDetailsProcess'])->name('details.ManageDetailsProcess');
    Route::get('details/deleteDetails/{id}',[DetailsController::class,'DeleteDetails']);
    Route::get('details/manage_details/{id}',[DetailsController::class,'ManageDetailsView']);
    //    update details status
    Route::get('details/status/{status}/{id}',[DetailsController::class,'status']);


    //    ==========Photography========
    Route::get('photography',[PhotographyController::class,'PhotographyView']);
    Route::get('photography/manage_photography',[PhotographyController::class,'ManagePhotographyView']);
    Route::post('photography/manage_photography_process',[PhotographyController::class,'ManagePhotographyProcess'])->name('photography.ManagePhotographyProcess');
    Route::get('photography/deletePhotography/{id}',[PhotographyController::class,'DeletePhotography']);
    Route::get('photography/manage_photography/{id}',[PhotographyController::class,'ManagePhotographyView']);
    //    update photography status
    Route::get('photography/status/{status}/{id}',[PhotographyController::class,'status']);


});

