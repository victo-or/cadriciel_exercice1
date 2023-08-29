<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BusinessController::class, 'index']);
Route::get('/home', [BusinessController::class, 'index']);
Route::get('/about', [BusinessController::class, 'about']);
Route::get('/products', [BusinessController::class, 'products']);
Route::get('/contact', [BusinessController::class, 'contact']);
Route::post('/contact', [BusinessController::class, 'contactForm']);
