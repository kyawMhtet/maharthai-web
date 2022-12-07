<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaidController;
use App\Http\Controllers\NannyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaidCookController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\MaidPetCareController;
use App\Http\Controllers\HouseKeepingController;
use App\Http\Controllers\PremiumNannyController;
use App\Http\Controllers\MaidElderCareController;
use App\Http\Controllers\User\MainMaidController;

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

// Route::redirect('admin', 'loginPage');

// Route::group(['prefix' => 'user', 'middleware' => 'user_auth'],function(){
//     Route::get('/', function(){
//         return view('user.main.home');
//     })->name('user#home');
// });

// login

Route::middleware(['admin_auth'])->group(function(){
    Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
});

Route::get('/', function(){
    return view('user.main.home');
});

Route::get('/', [UserController::class, 'home'])->name('user#home');



// Route::get('/home/nanny/{id}', [NannyController::class, 'nannyDetail'])->name('nanny#detail');
Route::get('requestPage', [UserController::class, 'requestForm'])->name('user#request');


Route::get('nanny_detail/{id}', [UserController::class, 'nannyInfo'])->name('nanny#info');
// Route::get('nanny_detail')

Route::get('nanny/request/{id}', [UserController::class, 'nannyRequest'])->name('nanny#request');


// maid page
Route::get('maidPage', [MainMaidController::class, 'maidPage'])->name('mainmaid#page');

Route::get('maid_detail/{id}', [MainMaidController::class, 'maidInfo'])->name('maid#info');

// Route::get('maid/request/{id}', );
Route::get('requestPage', [MainMaidController::class, 'requestForm'])->name('maid#request');




// admin panel

// Route::get('/home/nanny/{id}', [NannyController::class, 'nannyDetail'])->name('nanny#detail');
Route::get('requestPage', [UserController::class, 'requestForm'])->name('user#request');


Route::get('nanny_detail/{id}', [UserController::class, 'nannyInfo'])->name('nanny#info');
// Route::get('nanny_detail')

Route::get('nanny/request/{id}', [UserController::class, 'nannyRequest'])->name('nanny#request');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    // Route::get('/home', [UserController::class, 'home'])->name('user#home');


    // dashboard
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // adminpanel
    Route::group(['prefix' => 'category', 'middleware' => 'admin_auth'],function(){
        Route::get('list', [CategoryController::class, 'list'])->name('category#list');
        // nanny page
        Route::get('nannyPage', [NannyController::class, 'nannyPage'])->name('nanny#page');

        // nanny create page
        Route::get('nanny/create', [CategoryController::class, 'nannyCreatePage'])->name('nanny#create');

        // nanny after create
        Route::post('nanny', [NannyController::class, 'nannyCreate'])->name('nanny#aftercreate');

        // nanny delete
        Route::get('nanny/delete/{id}', [NannyController::class, 'nannyDelete'])->name('nanny#delete');

        // // nanny update
        // Route::get('nanny/update/{id}', [NannyController::class, 'updatePage'])->name('nanny#update');

        Route::get('nanny/editPage/{id}',[NannyController::class, 'editPage'])->name('nanny#editPage');
        // nanny detail
        Route::get('nanny/detail/{id}', [NannyController::class, 'nannyEdit'] )->name('nanny#updatePage');

        // nanny update
        Route::post('nanny/update', [NannyController::class, 'nannyUpdate'])->name('nanny#update');



<<<<<<< HEAD
        // maid page
        // Route::get('maidPage', [MaidController::class, 'maidPage'])->name('maid#page');

        // Route::get('maid/createPage', [CategoryController::class, 'maidCreatePage'])->name('maid#createpage');
        // Route::post('maid', [MaidController::class, 'maidCreate'])->name('maid#create');
        Route::get('maidPage', [MaidController::class, 'maidPage'])->name('maid#page');

        Route::get('maid/create', [CategoryController::class, 'maidCreatePage'])->name('maid#create');

        Route::post('maid', [MaidController::class, 'maidCreate'])->name('maid#aftercreate');

        Route::get('maid/detail/{id}', [MaidController::class, 'maidEdit'])->name('maid#updatePage');

        Route::get('maid/delete/{id}', [MaidController::class, 'maidDelete'])->name('maid#delete');

        Route::get('maid/editPage/{id}', [MaidController::class, 'editPage'])->name('maid#editPage');

        Route::post('maid/update', [MaidController::class, 'maidUpdate'])->name('maid#update');












=======
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725

        // customers page
        Route::get('customer', [CategoryController::class, 'customerPage'])->name('customer#page');

    });

    // user
    // home
    // Route::group(['prefix' => 'user', 'middleware' => 'user_auth'],function(){
    //     Route::get('home', function(){
    //         return view('user.home');
    //     })->name('user#home');
    // });

});







