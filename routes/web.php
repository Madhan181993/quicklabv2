<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\SettingsController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'IsAdmin'])->group(function () {

    Route::get('/dashboard', 'Admin\FrontendController@index');

    Route::get('categories', [CategoryController::class,'index']);
    Route::get('add-category','Admin\CategoryController@add');
    Route::POST('insert-category','Admin\CategoryController@insert');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category', [CategoryController::class, 'update']);

    Route::get('company-settings', 'Admin\CompanyController@index')->name('company-settings');
    Route::post('edit-company', 'Admin\CompanyController@editCompany')->name('edit-company');
    Route::put('update-company', 'Admin\CompanyController@updateCompany')->name('update-company');

    Route::get('users', 'Admin\UserController@index')->name('users');
    Route::post('add-user', 'Admin\UserController@addUser')->name('add-user');
    Route::post('edit-user', 'Admin\UserController@editUser')->name('edit-user');
    Route::put('update-user', 'Admin\UserController@updateUser')->name('update-user');
    Route::put('delete-user', 'Admin\UserController@deleteUser')->name('delete-user');

    Route::get('settings',[SettingsController::class,'index'])->name('settings');


    Route::get('tax', [TaxController::class,'index']);

});
