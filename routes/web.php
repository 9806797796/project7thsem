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

Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome'])->name('getHome');

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

Route::get('/admin/blood/requestdetail/{bloodrequest}', [App\Http\Controllers\AdminController::class, 'getRequestedBloodDetail'])->name('admin.getRequestedBloodDetail')->middleware('is_admin');
Route::get('/admin/donner/delete/{donnerid}', [App\Http\Controllers\AdminController::class, 'getDonnerDelete'])->name('admin.getDonnerDelete')->middleware('is_admin');

Route::get('/admin/blood/manage', [App\Http\Controllers\AdminController::class, 'getManageBlood'])->name('admin.getManageBlood')->middleware('is_admin');
Route::post('/admin/blood/manage', [App\Http\Controllers\AdminController::class, 'postAddDonorBlood'])->name('admin.postAddDonorBlood')->middleware('is_admin');
Route::get('/admin/issuebooold/{bloodgroup}', [App\Http\Controllers\AdminController::class, 'getIssueBlood'])->name('admin.getIssueBlood')->middleware('is_admin');
Route::post('/admin/issueblood', [App\Http\Controllers\AdminController::class, 'postIsssueBlood'])->name('admin.postIsssueBlood')->middleware('is_admin');
Route::get('/admin/user/manage', [App\Http\Controllers\AdminController::class, 'getManageAdminUser'])->name('admin.getManageAdminUser')->middleware('is_admin');
Route::post('/admin/user/manage', [App\Http\Controllers\AdminController::class, 'postAddAdminUser'])->name('admin.postAddAdminUser')->middleware('is_admin');
Route::get('/admin/user/delete/{user}', [App\Http\Controllers\AdminController::class, 'getAdminUserDelete'])->name('admin.getAdminUserDelete')->middleware('is_admin');


