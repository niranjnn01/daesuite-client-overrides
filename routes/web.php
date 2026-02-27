<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Client\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Client Custom Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by ClientServiceProvider.
| They override or extend core ERP routes.
|
*/


/*
|--------------------------------------------------------------------------
| Example 1: Simple Page Using Core PagesController
|--------------------------------------------------------------------------
*/

Route::get('/abc', function () {
    return app(PageController::class)->overrideRender('pages.abc');
});


/*
|--------------------------------------------------------------------------
| Example 2: Direct Client View
|--------------------------------------------------------------------------
*/

Route::get('/promo', function () {
    return view('client::promo');
});


/*
|--------------------------------------------------------------------------
| Example 3: Client Custom Controller With Logic
|--------------------------------------------------------------------------
*/

Route::get('/landing', [LandingController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Example 4: Override Existing Core Route
|--------------------------------------------------------------------------
|
| Because client routes load after core routes,
| this will replace the core behavior.
|
*/

Route::get('/about', function () {
    return view('client::about-custom');
});


/*
|--------------------------------------------------------------------------
| Example 5: Authenticated Client Route
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/client-dashboard', function () {
        return view('client::dashboard');
    });

});