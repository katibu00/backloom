<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ComboController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PickupCenterController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     if(Auth::user()){
        
//         if(Auth::user()->user_type == 'admin')
//         {
//             return redirect()->route('home.admin');
//         }
//     }

//     return view('client.pages.index');
// });


Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::get('/product/{slug}', [PagesController::class, 'show'])->name('product.details');
Route::post('/wishlist/add/{id}', [WishlistController::class, 'add'])->name('wishlist.add');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::get('/products/{slug}', [PagesController::class, 'show'])->name('product.details');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/home/admin', [HomeController::class,'admin'])->name('home.admin');
});


Route::prefix('products')->middleware(['auth'])->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/index', [ProductController::class, 'index'])->name('products.index');

    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


});



Route::resource('categories', CategoriesController::class);


Route::group(['prefix' => 'users', 'middleware' => ['auth', 'admin']], function () {
   
    Route::get('/regular', [UsersController::class, 'regular'])->name('regular.index');
    Route::get('/admins', [UsersController::class, 'admins'])->name('admins.index');
    Route::post('/manual-funding', [UsersController::class, 'manualFunding'])->name('manual-funding');
    Route::post('/change-password', [UsersController::class, 'changePassword'])->name('change-password');
    Route::delete('/{id}',  [UsersController::class, 'destroy'])->name('users.destroy');

    Route::post('/admin/submit',  [UsersController::class, 'storeAdmin'])->name('admin.store');


});