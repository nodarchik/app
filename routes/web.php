<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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
// All Listings
Route::get('/', [ListingController::class, 'create']);
// Show Create Form
Route::get('/listings', [ListingController::class, 'listings']);
// Store Listing Data
Route::post('/store',[ListingController::class, 'store']);
