<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategorysController;
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
    $products = Products::orderBy('created_at','desc')->offset(0)->limit(9)->get();

    return view(
        'welcome',
        compact('Cats','products')
    );;
});
// Route::get('/cart', function () {


//     return 'Maha';
// });

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(
    function(){

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
    function(){

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

// Route::resource('category', CategorysController::class);
// Route::resource('products', ProductsController::class);

Auth::routes();
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(
    function(){

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



Route::get('/categoryid/{id}', [App\Http\Controllers\CategorysController::class, 'showall'])->name( 'categoryid');
// Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/searchpage', [App\Http\Controllers\HomeController::class, 'searchpage'])->name('searchpage');
Route::resource('category', CategorysController::class);
Route::resource('products', ProductsController::class);

Auth::routes();

Route::get('/home', [ App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/cart', CartsController::class);