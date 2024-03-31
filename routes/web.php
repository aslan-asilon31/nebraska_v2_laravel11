<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome\Index;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\masterdata\BankmasterController;
use App\Http\Controllers\masterdata\BrandmasterController;
use App\Http\Controllers\masterdata\CategorymasterController;
use App\Http\Controllers\masterdata\DepartmentmasterController;
use App\Http\Controllers\masterdata\ImagemasterController;
use App\Http\Controllers\masterdata\PricemasterController;
use App\Http\Controllers\masterdata\RegionmasterController;
use App\Http\Controllers\masterdata\RolemasterController;
use App\Http\Controllers\masterdata\SectionmasterController;
use App\Http\Controllers\masterdata\StatusmasterController;
 
Route::get('/', Index::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',


    
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('welcome-category-detail', App\Livewire\Welcome\ProductCategoryDetail::class)->name('welcome.category.detail');


Route::get('dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard.index')->middleware('auth');


Route::get('order', App\Livewire\Order\Index::class)->name('order.index');
Route::get('order-detail', App\Livewire\Order\Detail::class)->name('order.detail');

Route::get('product', App\Livewire\Product\Index::class)->name('product.index');
Route::get('product-detail', App\Livewire\Product\Detail::class)->name('product.detail');
Route::get('product-grid', App\Livewire\Product\Grid::class)->name('product.grid');
Route::get('product-shoppingcart', App\Livewire\Product\Shoppingcart::class)->name('product.shoppingcart');
Route::get('product-checkout', App\Livewire\Product\Checkout::class)->name('product.checkout');


// Route::get('cart', [ProductController::class, 'cart'])->name('cart');

Route::get('cart', App\Livewire\Product\Cart::class)->name('cart');
Route::get('add-to-cart/{id}', App\Livewire\Product\CartAdd::class)->name('add.to.cart');

// Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');

Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');

Route::delete('remove-from-cart/{id}', [ProductController::class, 'remove'])->name('remove.from.cart');
// Route::delete('remove-from-cart', App\Livewire\Product\CartRemove::class)->name('remove.from.cart');


Route::get('buyer-dashboard', App\Livewire\Buyer\Dashboard::class)->name('buyer.dashboard');
Route::get('buyer-order', App\Livewire\Buyer\Order::class)->name('buyer.order');
Route::get('buyer-address', App\Livewire\Buyer\Address::class)->name('buyer.address');
Route::get('buyer-wishlist', App\Livewire\Buyer\Wishlist::class)->name('buyer.wishlist');



Route::get('customer', App\Livewire\Customer\Index::class)->name('customer.index');


Route::get('invoice', App\Livewire\Invoice\Index::class)->name('invoice.index');
Route::get('invoice-detail', App\Livewire\Invoice\Detail::class)->name('invoice.detail');


Route::get('profile', App\Livewire\Profile\Index::class)->name('profile.index');


Route::get('user', App\Livewire\User\Index::class)->name('user.index')->middleware('auth');    
Route::get('user-grid', App\Livewire\User\Grid::class)->name('user.grid')->middleware('auth'); 
Route::get('user-create', App\Livewire\User\Create::class)->name('user.create')->middleware('auth');   
Route::post('user-add', App\Livewire\User\Add::class)->name('user.add')->middleware('auth');   
Route::get('user-edit/{id}', App\Livewire\User\Edit::class)->name('user.edit')->middleware('auth');
Route::put('user-update/{id}', App\Livewire\User\Update::class)->name('user.update')->middleware('auth');

Route::get('auth-login', App\Livewire\Authentication\Login::class)->name('authentication.login');
Route::get('auth-register', App\Livewire\Authentication\Register::class)->name('authentication.register');
Route::get('auth-resetpassword', App\Livewire\Authentication\Resetpassword::class)->name('authentication.resetpassword');
Route::get('auth-lockscreen', App\Livewire\Authentication\Lockscreen::class)->name('authentication.lockscreen');
Route::get('auth-accountverified', App\Livewire\Authentication\Accountverified::class)->name('authentication.accountverified');


Route::get('error-access-denied', App\Livewire\ErrorPages\AccessDenied::class)->name('errorpage.accessdenied');
Route::get('error-404', App\Livewire\ErrorPages\Error404::class)->name('errorpage.error404');
Route::get('error-under-construction', App\Livewire\ErrorPages\UnderConstruction::class)->name('errorpage.underconstruction');



Route::resource('/posts', App\Http\Controllers\PostController::class);

// Route::get('category', App\Livewire\Category\Index::class)->name('category.index');
