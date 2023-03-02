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
Route::post('/admin/donner/add', [App\Http\Controllers\AdminController::class, 'postNewDonor'])->name('admin.postNewDonor')->middleware('is_admin');
Route::get('/admin/blood/request', [App\Http\Controllers\AdminController::class, 'getManageRequestBloodAdmin'])->name('admin.getManageRequestBlood')->middleware('is_admin');
Route::get('/admin/blood/requestdetail/{bloodrequest}', [App\Http\Controllers\AdminController::class, 'getRequestedBloodDetail'])->name('admin.getRequestedBloodDetail')->middleware('is_admin');
Route::post('/admin/blood/requestdetail/{bloodrequest}', [App\Http\Controllers\AdminController::class, 'postResponse'])->name('admin.postResponse')->middleware('is_admin');

Route::get('/admin/delete/{donner}', [App\Http\Controllers\AdminController::class ,'getDeleteDonner'])->name('admin.getDeleteDonner')->middleware('is_admin');

