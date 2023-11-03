<?php

use App\Http\Controllers\AppendGridController;
use App\Http\Controllers\EimzoController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UppyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ReportController::class)->group(function() {
    Route::get('/yajra/{name}', 'view')->name('yajra');
    Route::any('/report/request','report')->name('report');
    Route::any('/report/export/{id}','report_export')->name('report_export');

});
Route::get('/editor/{name}', [App\Http\Controllers\ReportController::class, 'view'])->name('users.index');
Route::get('/get/branch', [App\Http\Controllers\ReportController::class, 'getBranch'])->name('branch');
Route::post('/post', [App\Http\Controllers\ReportController::class, 'store'])->name('users.store');
Route::get('/append-grid/{name}', [AppendGridController::class,'view'])->name('append-grid');
Route::controller(UppyController::class)->group(function() {
    Route::get('/uppy/{name}', 'view')->name('uppy');
    Route::post('/uploadimage/update', 'uploadImage')->name('uploadImage');
});
Route::controller(EimzoController::class)->group(function() {
    Route::get('/eimzo', 'view')->name('eimzo');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
