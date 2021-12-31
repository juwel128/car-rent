<?php

use App\Http\Controllers\DatatableController;
use App\Http\Controllers\FrontEnt\HomeController;
use App\Http\Controllers\FrontEnt\LoginController;
use App\Http\Livewire\Frontend\Customer;
use App\Http\Livewire\Frontend\Error;
use App\Http\Livewire\Frontend\SignIn;
use App\Http\Livewire\Frontend\SignUp;
use App\Http\Livewire\Frontend\LogIn;
use App\Http\Livewire\Frontend\Imam\Home;
use App\Http\Livewire\Backend\Admin\QuizList;
use App\Http\Livewire\Backend\Admin\UserList;
use App\Http\Livewire\Backend\Category;
use App\Http\Livewire\Backend\Product;
use App\Http\Livewire\Backend\Order;
use App\Http\Livewire\Backend\OrderList;
use App\Http\Livewire\Backend\Cart;
use App\Http\Livewire\Backend\Checkout;
use App\Http\Livewire\Backend\RentCar;
use App\Http\Livewire\Backend\Driver\AddCar;
use App\Http\Livewire\Backend\Driver\AllRent;
use App\Http\Livewire\Frontend\User\Home as NormalUserHome;
use App\Http\Livewire\FrontendHomeUserImam;
use App\Http\Livewire\Frontend\CheckUserType;;
use App\Http\Livewire\Inventory\DelieveryMethod;
use App\Http\Livewire\UserProfile\AuthLockScreen;
use App\Http\Livewire\UserProfile\ChangePassword;
use App\Http\Livewire\UserProfile\ProfileSettings;
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

Route::get('cart', Cart::class)->name('cart');
Route::get('checkout', Checkout::class)->name('checkout');

// Start Imam Route
Route::get('check-user-type', CheckUserType::class)->name('check-user-type');
Route::group(['middleware' => ['role:customer', 'user_permission']], function () {
          Route::get('rent-car/{id?}', RentCar::class)->name('rent-car');
});
Route::group(['middleware' => ['role:imam', 'user_permission']], function () {
    Route::get('imam', Home::class)->name('imam');
    Route::get('category', Category::class)->name('category');
    Route::get('product', Product::class)->name('product');
    Route::get('order', Order::class)->name('order');
    Route::get('add-car', AddCar::class)->name('add-car');
    Route::get('confirm-rent', AllRent::class)->name('confirm-rent');
});
Route::group(['middleware' => ['role:user', 'user_permission']], function () {
    Route::get('user1', NormalUserHome::class)->name('user1');
});
// End Imam Route
Route::get('/', function () {
    return view('auth.login');
});
Route::group(['prefix' => 'customer'], function () {
    Route::get('customer_login', Customer::class)->name('customer_login');
});

Route::get('/', FrontendHomeUserImam::class)->name('home');
Route::get('/customer-login', [HomeController::class, 'CustomerLogin'])->name('customer-login');
Route::get('sign-in', SignIn::class)->name('sign-in');
Route::get('sign-up', SignUp::class)->name('sign-up');
Route::get('log-in', LogIn::class)->name('log-in');


Route::get('error', Error::class)->name('error');
// Route::get('order-completed', OrderCompleted::class)->name('order-completed');

Route::Post('customer_sign_in', [LoginController::class, 'authenticate'])->name('customer_sign_in');
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('user-list', UserList::class)->name('user-list');
    Route::get('order-list', OrderList::class)->name('order-list');
    Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
        return view('livewire.dashboard');
    })->name('dashboard');
});
