<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;


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


Route::prefix('admin')->name('admin.')->group(function(){


    Route::view('/login','admin.user.login')->name('login');
    Route::post('/login',[UserController::class,'login'])->name('login');
    
    Route::middleware(['auth:admin'])->group(function(){

        Route::get('/dashboard','Admin\FrontendController@index')->name('dashboard');

        Route::post('/logout',[UserController::class,'logout'])->name('logout');


        Route::get('categories', [CategoryController::class,'index']);
        Route::get('add-category',[CategoryController::class,'add']);
        Route::post('insert-category',[CategoryController::class,'insert']);
        Route::get('edit-category/{id}', [CategoryController::class,'edit'])->name('edit-category');
        Route::post('update-category', [CategoryController::class, 'update'])->name('update-category');

        Route::get('company-settings', 'Admin\CompanyController@index')->name('company-settings');
        Route::post('edit-company', 'Admin\CompanyController@editCompany')->name('edit-company');
        Route::put('update-company', 'Admin\CompanyController@updateCompany')->name('update-company');

        Route::get('users', 'Admin\UserController@index')->name('users');
        Route::post('add-user', 'Admin\UserController@addUser')->name('add-user');
        Route::post('edit-user', 'Admin\UserController@editUser')->name('edit-user');
        Route::put('update-user', 'Admin\UserController@updateUser')->name('update-user');
        Route::post('delete-user', 'Admin\UserController@deleteUser')->name('delete-user');

        Route::get('settings',[SettingsController::class,'index'])->name('settings');
        Route::get('edit-settings',[SettingsController::class,'edit'])->name('editsettings');
        Route::post('settings-update',[SettingsController::class,'update'])->name('settings-update');

        Route::get('tax', [TaxController::class,'index'])->name('tax');
        Route::post('insert-tax', [TaxController::class,'insert'])->name('insert-tax');

        Route::post('edit-tax/{id}', [TaxController::class,'edit'])->name('edit-tax');
        
        // Product Management Routes
        Route::get('products', [ProductController::class,'index'])->name('products');
        Route::get('add-product',[ProductController::class,'addProduct'])->name('add-product');
        // Route::get('add-product','Admin\ProductController@addProduct')->name('add-product');
        Route::POST('insert-product',[ProductController::class,'insert'])->name('insert-product');
        Route::get('edit-product/{id}',[ProductController::class,'edit'])->name('edit-product');
        Route::Post('update-product',[ProductController::class,'update'])->name('update-product');
        Route::get('delete-product/{id}',[ProductController::class,'delete'])->name('delete-product');


        // Admin Profile Routes
        Route::get('profile', [AdminProfileController::class,'index'])->name('profile');
    });

});



