<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/send-message', [HomeController::class, 'storeCustomerDetails'])->name('customer.message');
Route::post('/add-member', [HomeController::class, 'storeMember'])->name('member.add');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
