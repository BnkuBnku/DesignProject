<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressConController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookpageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RefundController;


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

//TEST
Route::get('test', [BookpageController::class, 'test'])->name('test');

//HOMEPAGE
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::post('post-get', [HomepageController::class, 'postGet'])->name('get.post');

//ABOUT
Route::get('About', [AboutController::class, 'index'])->name('about'); 

//BOOKPAGE
Route::get('Book', [BookpageController::class, 'book'])->name('book');
Route::get('front/ResortMap/{WataHek}', [BookpageController::class, 'gmaps'])->name('gmaps');
Route::get('Success', [BookpageController::class, 'success'])->name('success'); 
Route::get('Overview', [BookpageController::class, 'overview'])->name('overview');
Route::get('front/Book/{id}/{checkin}/{checkout}/{numberAdult}/{numberChild}', [BookpageController::class, 'booking'])->name('booking.post');
Route::post('Transact', [BookpageController::class, 'transact'])->name('transact');
Route::post('post-final', [BookpageController::class, 'finalbook'])->name('final.post');


//CONTACT
Route::get('Contact', [ContactController::class, 'index'])->name('contact');

//RECEP LOGIN REGISTRATION
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('auth/login', [AuthController::class, 'logout'])->name('logout');

//ADMIN LOGIN
Route::post('post-logina', [AdminController::class, 'postLoginA'])->name('logina.post'); 

//DASHBOARD
Route::get('admin', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('admin/admin', [DashboardController::class, 'navi']); 

//CHECKOUT(NEXT-CONSTRUCTION)
Route::get('checkout', [CheckOutController::class, 'index'])->name('checkout'); 
Route::get('admin/checkout', [CheckOutController::class, 'navi']); 

//CHECKIN(NEXT-CONSTRUCTION)
Route::get('checkin', [CheckInController::class, 'index'])->name('checkin'); 
Route::get('admin/checkin', [CheckInController::class, 'navi']); 

//PENDING CRUD
Route::get('pending', [PendingController::class, 'index'])->name('pending'); 
Route::get('admin/pending', [PendingController::class, 'navi']); 
Route::post('admin/pending/confirm/{id}', [PendingController::class, 'confirm'])->name('pending.confirm'); 
Route::post('admin/pending/refund/{id}', [PendingController::class, 'refund'])->name('pending.refund'); 

//CONFIRM CRUD ()
Route::get('confirm', [ConfirmController::class, 'index'])->name('confirm'); 
Route::get('admin/confirm', [ConfirmController::class, 'navi']); 

//REFUNDED CRUD
Route::get('refund', [RefundController::class, 'index'])->name('refund'); 
Route::get('admin/refund', [RefundController::class, 'navi']); 

//ACCOUNTS CRUD (COMPLETED/CAN BE IMPROVED)
Route::get('accounts', [AccountController::class, 'index'])->name('accounts'); 
Route::get('admin/accounts', [AccountController::class, 'navi']); 

//ADDRESS CRUD (COMPLETED) 
Route::get('resort', [AddressConController::class, 'index'])->name('resort'); 
Route::get('create', [AddressConController::class, 'create'])->name('create'); 
Route::post('post-createAddress', [AddressConController::class, 'postCreate'])->name('create.post'); 
Route::get('admin/address/{resort}', [AddressConController::class, 'edit'])->name('resort.edit');           //Admin -> Resort -> Edit -> Address
Route::post('admin/resort/delete/{id}', [AddressConController::class, 'destroy'])->name('resort.destroy');  //Admin -> Resort -> Delete 
Route::get('admin/resort', [AddressConController::class, 'navi']); 
Route::post('admin/address/{id}', [AddressConController::class, 'save'])->name('save');                     //Admin -> Resort -> Edit -> Address -> Save

//ADMIN LOGIN (UNUSED)
Route::get('loginA', [AuthController::class, 'loginA'])->name('loginA');
Route::post('post-loginA', [AuthController::class, 'loginA'])->name('loginA.post');

Route::group(['middleware'=>['AuthCheck']], function(){
    //LOGIN AUTH
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
});







