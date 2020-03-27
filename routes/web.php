<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
  return view("auth.login");

});

Auth::routes([
    'register' => false
]);

Route::middleware("auth")->group(function (){
    Route::get('/home', 'AccountController@index')->name('home');

    /* Controller des caissiers */
    Route::resource('/cashiers', 'Resources\CashiersController')
        ->name("index","cashiers.index")
        ->name("show","cashiers.show")
        ->name("create","cashiers.create")
        ->name("store","cashiers.store")
        ->name("edit","cashiers.edit")
        ->name("update","cashiers.update")
        ->name("destroy","cashiers.destroy");

    /* Controller des fournisseurs */
    Route::resource('/providers', 'Resources\ProvidersController')
        ->name("index","providers.index")
        ->name("show","providers.show")
        ->name("create","providers.create")
        ->name("store","providers.store")
        ->name("edit","providers.edit")
        ->name("update","providers.update")
        ->name("destroy","providers.destroy");

    /* Controller des approvisionements */
    Route::resource('/supplies', 'Resources\SuppliesController')
        ->name("index","supplies.index")
        ->name("show","supplies.show")
        ->name("create","supplies.create")
        ->name("store","supplies.store")
        ->name("edit","supplies.edit")
        ->name("update","supplies.update")
        ->name("destroy","supplies.destroy");

    /* Route pour afficher les approvisionements supprimer */
    Route::get("/supplies/soft-deletes","Resources\SuppliesController@listWithSoftDeleted")->name("supplies.SoftDeleted");
    /* Route pour confirmer un approvisionement */
    Route::post("/supplies/{id}/confirm","Resources\SuppliesController@confirm")->name("supplies.confirm");

    /* Controller des approvisionements */
    Route::resource('/products', 'Resources\ProductsController')
        ->name("index","products.index")
        ->name("show","products.show")
        ->name("create","products.create")
        ->name("store","products.store")
        ->name("edit","products.edit")
        ->name("update","products.update")
        ->name("destroy","products.destroy");

    /* Controller des ventes */

    Route::resource('/sales', 'Resources\SalesController')->only("show","index")
        ->name("index","supplies.index")
        ->name("show","supplies.show");
    Route::get("notifi","NotificationController@list")->name("notification_list");

});
