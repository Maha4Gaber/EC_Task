<?php

use App\Http\Controllers\CategorisController;
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

<<<<<<< Updated upstream
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
=======
<<<<<<< HEAD
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
>>>>>>> Stashed changes

Auth::routes();
=======
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(
    function(){
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a

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

<<<<<<< HEAD


Route::get('/categoryid/{id}', [App\Http\Controllers\CategorysController::class, 'showall'])->name( 'categoryid');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/searchpage', [App\Http\Controllers\HomeController::class, 'searchpage'])->name('searchpage');
=======
Route::resource('category', CategorysController::class);
Route::resource('products', ProductsController::class);

Auth::routes();

<<<<<<< Updated upstream
=======
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');