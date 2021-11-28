<?php

use App\Http\Controllers\CateringController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LightingController;
use App\Http\Controllers\PhotographyController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\Sound_systemController;
use App\Http\Controllers\DecorationController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class,'indexView']);

Route::get('/allcatering',[FrontController::class,'AllCateringView']);
Route::get('/allphotography',[FrontController::class,'AllPhotographyView']);
Route::get('/alldecoration',[FrontController::class,'AllDecorationView']);
Route::get('/alllighting',[FrontController::class,'AllLightingView']);
Route::get('/allsoundsystem',[FrontController::class,'AllSoundSystemView']);
Route::get('/allcompanies',[FrontController::class,'AllCompaniesView']);
Route::get('/company_details/{id}',[FrontController::class,'CompanyDetailsView']);

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

    //    ==========Sound_system========
    Route::get('sound_system',[Sound_systemController::class,'Sound_systemView']);
    Route::get('sound_system/manage_sound_system',[Sound_systemController::class,'ManageSound_systemView']);
    Route::post('sound_system/manage_Sound_system_process',[Sound_systemController::class,'ManageSound_systemProcess'])->name('sound_system.ManageSound_systemProcess');
    Route::get('sound_system/deleteSound_system/{id}',[Sound_systemController::class,'DeleteSound_system']);
    Route::get('sound_system/manage_sound_system/{id}',[Sound_systemController::class,'ManageSound_systemView']);
    //    update Sound_system status
    Route::get('sound_system/status/{status}/{id}',[Sound_systemController::class,'status']);

    //    ==========decoration========
    Route::get('decoration',[DecorationController::class,'DecorationView']);
    Route::get('decoration/manage_decoration',[DecorationController::class,'ManageDecorationView']);
    Route::post('decoration/manage_Decoration_process',[DecorationController::class,'ManageDecorationProcess'])->name('decoration.ManageDecorationProcess');
    Route::get('decoration/deleteDecoration/{id}',[DecorationController::class,'DeleteDecoration']);
    Route::get('decoration/manage_decoration/{id}',[DecorationController::class,'ManageDecorationView']);
    //    update Sound_system status
    Route::get('decoration/status/{status}/{id}',[DecorationController::class,'status']);

    //    ==========lighting========
    Route::get('lighting',[LightingController::class,'LightingView']);
    Route::get('lighting/manage_lighting',[LightingController::class,'ManageLightingView']);
    Route::post('lighting/manage_Lighting_process',[LightingController::class,'ManageLightingProcess'])->name('lighting.ManageLightingProcess');
    Route::get('lighting/deleteLighting/{id}',[LightingController::class,'DeleteLighting']);
    Route::get('lighting/manage_lighting/{id}',[LightingController::class,'ManageLightingView']);
    //    update Sound_system status
    Route::get('lighting/status/{status}/{id}',[LightingController::class,'status']);

    //    ==========catering========
    Route::get('catering',[CateringController::class,'CateringView']);
    Route::get('catering/manage_catering',[CateringController::class,'ManageCateringView']);
    Route::post('catering/manage_catering_process',[CateringController::class,'ManageCateringProcess'])->name('catering.ManageCateringProcess');
    Route::get('catering/deletecatering/{id}',[CateringController::class,'DeleteCatering']);
    Route::get('catering/manage_catering/{id}',[CateringController::class,'ManageCateringView']);
    //    update Sound_system status
    Route::get('catering/status/{status}/{id}',[CateringController::class,'status']);

});

