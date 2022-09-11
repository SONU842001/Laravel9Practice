<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeslideController;

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
    return view('frontend.index');
});

//admin all routes

Route::controller(adminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/admin/profile/edit', 'EditProfile')->name('admin.profile.edit');
    Route::post('/admin/profile/update', 'StoreProfile')->name('admin.profile.update');

    Route::get('/change/password', 'ChangePassword')->name('admin.changePassword');
    Route::post('/password/update', 'UpdatePassword')->name('admin.password.update');

});


//homeslides all routes
Route::controller(HomeslideController::class)->group(function () {
    Route::get('/home/slide', 'homeSlider')->name('home.slide');
    Route::post('/update/slider', 'updateSlide')->name('update.slider');
});







Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

//********/calling to auth.php in routes *************

require __DIR__.'/auth.php';
