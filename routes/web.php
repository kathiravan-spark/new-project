<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountDetailController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[AccountDetailController::class,'index'])->name('index');
Route::post('/account_draft',[AccountDetailController::class,'draftDetails'])->name('account_draft');
Route::post('/account_details',[AccountDetailController::class,'accountDetail'])->name('account_details');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
