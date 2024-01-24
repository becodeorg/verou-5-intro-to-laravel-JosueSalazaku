<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SpeciesController;
use Illuminate\Support\Facades\Route;

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

// Using the index() method in the WelcomeController class
Route::get('/', [WelcomeController::class, 'index']); // PREFERRED WAY

// Not using any controllers, instead returning the view directly from the router file
Route::get("/posts", function () {
    return view("posts");
});

// Corrected route definition with a semicolon at the end
Route::get("/species", function () {
    return view("species");
});
