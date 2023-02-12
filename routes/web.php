<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add/bloodinformation', [App\Http\Controllers\HomeController::class, 'postAddBlood'])->name('user.postAddBlood');
Route::get('/bloodrequest', [App\Http\Controllers\HomeController::class, 'getBloodRequest'])->name('user.getBloodRequest');
Route::post('/bloodrequest', [App\Http\Controllers\HomeController::class, 'postBloodRequest'])->name('user.postBloodRequest');
Route::get('/manage/requested/blood', [App\Http\Controllers\HomeController::class, 'getManageRequestBlood'])->name('user.getManageRequestBlood');
Route::get('/search/bloodgroup', [App\Http\Controllers\HomeController::class, 'getSearchBloodGroup'])->name('user.getSearchBloodGroup');
Route::get('/search/result', [App\Http\Controllers\HomeController::class, 'postSearchDonner'])->name('user.postSearchDonner');
Route::get('/blood/contribution', [App\Http\Controllers\HomeController::class, 'getContribution'])->name('user.getContribution');

Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/donner/manage', [App\Http\Controllers\AdminController::class, 'getManageDonner'])->name('admin.getManageDonner')->middleware('is_admin');


