<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TeacherController;


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
/events                  --  nampilin semua events, indexnya events
/events/{id} <GET>       --  nampilin events ke {id}
/events/create           --  bikin events
/events/{id}/edit <GET>  --  nampilin page edit events {id}

*buat backend*
/events/{id} <UPDATE/PATCH>   --  update events {id}
/events/{id} <DELETE>   --  delete events {id}

*/


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::resource('/events',EventsController::class);
Route::resource('/teachers',TeacherController::class);
Auth::routes();

Route::get('/pageevents1', [App\Http\Controllers\EventsController::class, 'index']);

Route::get('/about', function(){
    return view('about');
    });
// Route::get('/teachers', function(){
//     return view('teachers');
//     });
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