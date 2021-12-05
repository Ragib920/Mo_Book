<?php


use App\Http\Controllers\DetailsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[FrontController::class,'indexView']);

Route::get('/allcatering',[FrontController::class,'AllCateringView']);
Route::get('/allphotography',[FrontController::class,'AllPhotographyView']);
Route::get('/alldecoration',[FrontController::class,'AllDecorationView']);
Route::get('/alllighting',[FrontController::class,'AllLightingView']);
Route::get('/allsoundsystem',[FrontController::class,'AllSoundSystemView']);

Route::get('/allcompanies',[FrontController::class,'AllCompaniesView']);

Route::get('/company_details/{id}',[FrontController::class,'CompanyDetailsView']);


//User Authentication
Route::group(['prefix' => 'user'], function () {
    Route::get('login',[UserController::class,'LoginView']);
    Route::post('login',[UserController::class,'LogIn'])->name('user.login');
    Route::get('register',[UserController::class,'RegisterView']);
    Route::post('register',[UserController::class,'Registration'])->name('user.register');
    Route::get('logout',[UserController::class,'onLogout']);
});
Route::get('/service_details/{id}',[FrontController::class,'ServiceDetailsView'])->middleware('user_auth');
Route::get('/my_order',[FrontController::class,'MyOrderView'])->middleware('user_auth');
Route::post('/manage_order_process',[OrderController::class,'ManageOrderProcess'])->name('order.ManageOrderProcess');


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

    Route::get('orderlist',[OrderController::class,'MyOrderView']);
    //    ==========details========
    Route::get('details',[DetailsController::class,'DetailsView']);
    Route::get('details/manage_details',[DetailsController::class,'ManageDetailsView']);
    Route::post('details/manage_details_process',[DetailsController::class,'ManageDetailsProcess'])->name('details.ManageDetailsProcess');
    Route::get('details/manage_details/{details_id}',[DetailsController::class,'ManageDetailsView']);
    //    ==========Service========
    Route::get('service/manage_service',[ServiceController::class,'ManageServiceView']);
    Route::post('service/manage_service_process',[ServiceController::class,'ManageServiceProcess'])->name('service.ManageServiceProcess');
    Route::get('service/deleteService/{id}',[ServiceController::class,'DeleteService']);
    Route::get('service/manage_service/{id}',[ServiceController::class,'ManageServiceView']);
    Route::get('service/status/{status}/{id}',[ServiceController::class,'status']);
    //    ==========service========
    Route::get('service/catering',[ServiceController::class,'CateringView']);
    Route::get('service/photography',[ServiceController::class,'PhotographyView']);
    Route::get('service/decoration',[ServiceController::class,'DecorationView']);
    Route::get('service/lighting',[ServiceController::class,'LightingView']);
    Route::get('service/sound_system',[ServiceController::class,'Sound_systemView']);

    // order status
    Route::get('orderlist/status/{status}/{o_id}',[OrderController::class,'status']);
});
