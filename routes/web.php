<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard/create', function () {
//     return view('dashboardCreate');
// })->middleware(['auth'])->name('dashboardCreate');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('item', ItemController::class);
  });

// Route::get('/dashboard','App\Http\Controllers\DashboardsController@index')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
