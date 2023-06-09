<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SublliersController;
// use App\Models\Categoris;
use App\Models\Categorys;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
// use App\Models\Products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $Cats = Categorys::all();
    $products = Products::orderBy('created_at', 'desc')->offset(0)->limit(9)->get();

    return view(
        'welcome',
        compact('Cats', 'products')
    );;
});


Route::get('/aboutus', function () {
    return view(
        'user.aboutus'
    );;
});



Route::get('/contact', function () {
    return view(
        'user.contact'
    );;
});



Route::get('/blogs', function () {
    $Cats = Categorys::all();

    return view(
        'user.blogs',
        compact('Cats')
    );;
});



Route::get('/product/{id}',  function () {
    return view(
        'user.Product'
    );;
});
Route::get('/profile', function () {
    return view(
        'user.userprofile'
    );;
});





Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(
    function () {

        Route::resource('category', CategorysController::class);
        Route::resource('products', ProductsController::class);

        Route::get('/dashbourd', function () {
            $Cats = Categorys::all();
            $products = Products::all();

            return view(
                'Admin.index',
                compact('Cats', 'products')
            );;
        });
    }
);

Route::middleware(['auth', 'isAdmin'])->group(
    function () {

        Route::resource('category', CategorysController::class);
        Route::resource('products', ProductsController::class);
        Route::resource('subllier', SublliersController::class);

        Route::get('/dashbourd', function () {
            $Cats = Categorys::all();
            $products = Products::all();

            return view(
                'Admin.index',
                compact('Cats', 'products')
            );;
        });
    }
);


Auth::routes();
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(
    function () {

        Route::resource('category', CategorysController::class);
        Route::resource('products', ProductsController::class);

        Route::get('/dashbourd', function () {
            $Cats = Categorys::all();
            $products = Products::all();

            return view(
                'Admin.index',
                compact('Cats', 'products')
            );;
        });
    }
);



Route::get('/categoryid/{id}', [App\Http\Controllers\CategorysController::class, 'showall'])->name('categoryid');


Route::get('/searchpage', [App\Http\Controllers\HomeController::class, 'searchpage'])->name('searchpage');


Route::resource('category', CategorysController::class);
Route::resource('products', ProductsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');


Route::middleware(['auth'])->group(
    function () {
        Route::get('/cart', [App\Http\Controllers\HomeController::class, 'getcart']);

        Route::get('addtocart/{id}', [App\Http\Controllers\HomeController::class, 'addtocart']);
        Route::get('increase1/{id}', [App\Http\Controllers\HomeController::class, 'increase1']);
        Route::get('decrease1/{id}', [App\Http\Controllers\HomeController::class, 'decrease1']);
    }
);