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
})->middleware("guest");

Auth::routes([
    'register' => false
]);

/* Routes du middleware d'authentification */
Route::middleware("auth")->group(function (){


    /* Routes du middleware de l'admin */
    Route::middleware('role:admin')->group(function (){

        /*Admin Home page */
        Route::get('/home/admin', 'HomeController@adminIndex')->name('home.admin');

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

    });



    /* Routes des roles casssier et admin */
    Route::middleware('role:admin,cashier')->group(function (){
        /* Cashier Home page */
        Route::get('/home/cashier', 'HomeController@cashierIndex')->name('home.cashier');

        /* Controller des ventes */
        Route::resource('/sales', 'Resources\SalesController')
            ->only("show","index","store")
            ->name("index","sales.index") // list of sales
            ->name("show","sales.show") // list of products of a sales
            ->name("store","sales.store") // store new sale
        ;

        Route::get("notification","NotificationController@list")->name("notification_list");
    });



});
