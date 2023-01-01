<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildcategoryController;
use App\Http\Controllers\MenuController;
use App\Models\Category;
use App\Http\Controllers\AdvertisementController;
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


Route::get('/home', function () {
    return view('home');
});

Route::get('/auth', function () {
    return view('backend.admin.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
Route::prefix('auth')->group(function () {
   Route::resource('/category',CategoryController::class);
   Route::resource('/subcategory',SubCategoryController::class);
   Route::resource('/childcategory',ChildcategoryController::class);
});

Route::get('/', [MenuController::class, 'menu']);


//ads

Route::get('ads/create','AdvertisementController@create');


view()->composer('*', function ($view) {
    $menus = Category::with('subcategories')->get();
    $view->with('menus', $menus);
});
