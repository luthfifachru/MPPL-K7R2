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


/*
Model endpoint/routesnya

/                       --  landing pagge
/login                  --  login
/register               --  regis, perlu login dulu
/password               --  ganti password (setelah login)
/event                  --  nampilin semua event, indexnya event
/event/{id} <GET>       --  nampilin event ke {id}
/event/create           --  bikin event
/event/{id}/edit <GET>  --  nampilin page edit event {id}

*buat backend*
/event/{id} <UPDATE/PATCH>   --  update event {id}
/event/{id} <DELETE>   --  delete event {id}

*/


Route::get('/', [PagesController::class, 'index']);
Route::resource('/event',EventsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pageevent1', [App\Http\Controllers\EventsController::class, 'index'])->name('events');

Route::get('/about', function(){
    return view('about');
    });
Route::get('/teachers', function(){
    return view('teachers');
    });
Route::get('/contact', function(){
    return view('contact');
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