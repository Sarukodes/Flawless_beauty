<?php

use App\Http\Controllers\Admin\catogeryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\galleryController;
use App\Http\Controllers\Front\HomeController;
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

Route::name('front')->name('front.')->group(function () {
    Route::get('',[HomeController::class,'index'])->name('index');
    Route::get('/catogery',[HomeController::class,'catogery'])->name('catogery');
});



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');

    Route::prefix('slider')->name('slider.')->group(function () {
        Route::get('', [SliderController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [SliderController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{slider}', [SliderController::class, 'edit'])->name('edit');
        Route::get('del/{slider}', [SliderController::class, 'del'])->name('del');
    });
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', [catogeryController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [catogeryController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{category}', [catogeryController::class, 'edit'])->name('edit');
        Route::get('del/{category}', [catogeryController::class, 'del'])->name('del');
    });
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [ProductController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::get('del/{product}', [ProductController::class, 'del'])->name('del');
        Route::get('gallery/{product}',  [galleryController::class, 'index'])->name('gallery');
    });
    Route::prefix('gallery')->name('gallery.')->group(function () {
        Route::match(['GET', 'POST'], 'add', [galleryController::class, 'add'])->name('add');
        Route::get('del/{gallery}', [galleryController::class, 'del'])->name('del');
    });
    Route::prefix('image')->name('image.')->group(function(){
        Route::get('',[ImageController::class,'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [ImageController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{image}', [ImageController::class, 'edit'])->name('edit');
        Route::get('del/{image}' , [ImageController::class, 'del'])->name('del');
    });
});
