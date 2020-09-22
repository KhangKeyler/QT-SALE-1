<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
// Route::group(['prefix' => 'admin'], function () {
//     Route::group(['prefix' => 'orders'], function () {
//         Route::get('orderview', 'ordercontroller@orderview');
//     });
//     });



//login
Route::get('/login', [loginController::class, 'login']);