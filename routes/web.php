<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  [HomeController::class, 'index'])->name('home');

Route::get('/detail/{slug}',  [DetailController::class, 'index'])->name('detail');

Route::get('/checkout',  [CheckoutController::class, 'index'])->name('checkout');

Route::get('/checkout/success',  [CheckoutController::class, 'success'])->name('checkout-success');

Route::prefix('admin')
            ->namespace('App\Http\Controllers\Admin')
            ->middleware(['auth','admin'])
            ->group(function(){
                Route::get('/',     'DashboardController@index')
                            ->name('dashboard');

                 Route::resource('travel-package', 'TravelPackageController');  
                 Route::resource('gallery', 'GalleryController'); 
                 Route::resource('transaction', 'TransactionController'); 
            });

Auth::routes(['verify' => true]);

