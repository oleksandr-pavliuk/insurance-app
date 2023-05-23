<?php

use App\Http\Controllers\AdminClientServiceController;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return Redirect::to('/admin/records');
});

Route::get('/home', function () {
    return Redirect::to('/admin/records');
});

Route::resource('/admin/records', AdminClientServiceController::class);
