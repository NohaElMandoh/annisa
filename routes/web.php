<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', function () {
    return redirect('/home');
});
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        return redirect('/home');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();
    Route::get('/driver_2', [App\Http\Controllers\HomeController::class, 'driver_2'])->name('driver_2');
    Route::get('/fleets', [App\Http\Controllers\HomeController::class, 'fleets'])->name('fleets');
    Route::get('/dispatches', [App\Http\Controllers\HomeController::class, 'dispatches'])->name('dispatches');
    Route::get('/web_portal', [App\Http\Controllers\HomeController::class, 'web_portal'])->name('web_portal');
    Route::get('/passenger_app', [App\Http\Controllers\HomeController::class, 'passenger_app'])->name('passenger_app');
    Route::get('/web_booker', [App\Http\Controllers\HomeController::class, 'web_booker'])->name('web_booker');
    Route::get('/uber_clone', [App\Http\Controllers\HomeController::class, 'uber_clone'])->name('uber_clone');
    Route::get('/fleet_price', [App\Http\Controllers\HomeController::class, 'fleet_price'])->name('fleet_price');
    Route::get('/carrers', [App\Http\Controllers\HomeController::class, 'carrers'])->name('carrers');
    Route::get('/contact_us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
    Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->name('support');
    Route::get('/download_free_app', [App\Http\Controllers\HomeController::class, 'download_free_app'])->name('download_free_app');



});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});
