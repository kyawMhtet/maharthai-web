<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NannyController;
use App\Http\Controllers\User\UserController;
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

// Route::redirect('admin', 'loginPage');

// Route::group(['prefix' => 'user', 'middleware' => 'user_auth'],function(){
//     Route::get('/', function(){
//         return view('user.main.home');
//     })->name('user#home');
// });
Route::get('/home', function(){
    return view('user.main.home');
});

Route::get('/home', [UserController::class, 'home'])->name('user#home');

Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');

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







