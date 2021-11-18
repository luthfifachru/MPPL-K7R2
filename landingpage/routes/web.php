<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::resource('/events',EventsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pageevent1', function(){
    return view('PageEvent1');
});

/*------------------------------------
source = https://www.lab-informatika.com/menambahkan-halaman-update-password-laravel
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('password', 'App\Http\Controllers\PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'App\Http\Controllers\PasswordController@update')
        ->name('user.password.update');
});
//------------------------------------