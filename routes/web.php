<?php

use App\Models\Nanny;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaidController;
use App\Http\Controllers\NannyController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaidcookController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\MaidpetcareController;
use App\Http\Controllers\HousekeepingController;
use App\Http\Controllers\PremiumnannyController;
use App\Http\Controllers\MaideldercareController;
use App\Http\Controllers\User\AjaxController;
// main
use App\Http\Controllers\User\MainMaidController;
use App\Http\Controllers\User\MainmaidcookController;
use App\Http\Controllers\User\MainmaidpetcareController;
use App\Http\Controllers\User\MainHousekeepingController;
use App\Http\Controllers\User\MainpremiumnannyController;
use App\Http\Controllers\User\MainmaideldercareController;


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

// Route::get('/', function(){
//     return view('user.main.home');
// });

Route::get('/', [UserController::class, 'home'])->name('user#home');

Route::get('NannyMaidPage', [UserController::class, 'home'])->name('user#home');



// Route::get('/home/nanny/{id}', [NannyController::class, 'nannyDetail'])->name('nanny#detail');
Route::get('requestPage', [UserController::class, 'requestForm'])->name('user#request');

Route::get('nanny_detail/{id}', [UserController::class, 'nannyInfo'])->name('nanny#info');

Route::get('nanny/request/{id}', [UserController::class, 'nannyRequest'])->name('nanny#request');

// Route::get('nanny/fulltime', [UserController::class, 'nannyfulltimeFilter'])->name('nanny#fulltimefilter');

// Route::get('nanny/parttime', [UserController::class, 'nannypartimeFilter'])->name('nanny#partimefilter');


// Filtering

Route::prefix('filter')->group(function(){
    Route::get('nanny/list', [AjaxController::class, 'nannyList'])->name('filter#nannylist');
    // maid
    Route::get('maid/list', [AjaxController::class, 'maidList'])->name('filter#maidlist');

    // housekeeping
    Route::get('housekeeping/list', [AjaxController::class, 'housekeepingList'])->name('filter#housekeepinglist');

    // maid, cook
    Route::get('maidcook/list', [AjaxController::class, 'maidcookList'])->name('filter#maidcooklist');

    // maid, eldercare
    Route::get('maideldercare/list', [AjaxController::class, 'maideldercareList'])->name('filter#maideldercarelist');

    // maid, petcare
    Route::get('maidpetcare/list', [AjaxController::class, 'maidpetcareList'])->name('filter#maidpetcarelist');

    // premium, nanny
    Route::get('premiumnanny/list', [AjaxController::class, 'premiumnannyList'])->name('filter#premiumnannylist');

});





// maid page
Route::get('maidPage', [MainMaidController::class, 'maidPage'])->name('mainmaid#page');

Route::get('maid_detail/{id}', [MainMaidController::class, 'maidInfo'])->name('maid#info');

Route::get('maidRequestPage', [MainMaidController::class, 'maidRequestPage'])->name('maidrequest#page');

// housekeeping page

Route::get('housekeepingPage', [MainHousekeepingController::class, 'housekeepingPage'])->name('mainhousekeeping#page');

Route::get('housekeeping_detail/{id}', [MainHousekeepingController::class, 'housekeepingInfo'])->name('housekeeping#info');

Route::get('housekeepingRequestPage', [MainHousekeepingController::class, 'housekeepingRequestPage'])->name('housekeepingrequest#page');

// maid, cook page

Route::get('maidcookPage', [MainmaidcookController::class, 'maidcookPage'])->name('mainmaidcook#page');

Route::get('maidcook_detail/{id}', [MainmaidcookController::class, 'maidcookInfo'])->name('maidcook#info');

Route::get('maidcookRequestPage', [MainmaidcookController::class, 'maidcookRequestPage'])->name('maidcookrequest#page');


// maid, eldercare page

Route::get('maideldercarePage', [MainmaideldercareController::class, 'maideldercarePage'])->name('mainmaideldercare#page');

Route::get('maideldercare_detail/{id}', [MainmaideldercareController::class, 'maideldercareInfo'])->name('maideldercare#info');

Route::get('maideldercareRequestPage', [MainmaideldercareController::class, 'maideldercareRequestPage'])->name('maideldercarerequest#page');


// maid, pet care page

Route::get('maidpetcarePage', [MainmaidpetcareController::class, 'maidpetcarePage'])->name('mainmaidpetcare#page');

Route::get('maidpetcare_detail/{id}', [MainmaidpetcareController::class, 'maidpetcareInfo'])->name('maidpetcare#info');

Route::get('maidpetcareRequestPage', [MainmaidpetcareController::class, 'maidpetcareRequestPage'])->name('maidpetcarerequest#page');

// premium nanny page

Route::get('premiumnannyPage', [MainpremiumnannyController::class, 'premiumnannyPage'])->name('mainpremiumnanny#page');

Route::get('premiumnanny_detail/{id}', [MainpremiumnannyController::class, 'premiumnannyInfo'])->name('premiumnanny#info');

Route::get('premiumnannyRequestPage', [MainpremiumnannyController::class, 'premiumnannyRequestPage'])->name('premiumnannyrequest#page');




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
    // Route::post('logout', [AuthController::class, 'logout'])->name('logout');

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



        // maid page

        Route::get('maidPage', [MaidController::class, 'maidPage'])->name('maid#page');

        Route::get('maid/create', [CategoryController::class, 'maidCreatePage'])->name('maid#create');

        Route::post('maid', [MaidController::class, 'maidCreate'])->name('maid#aftercreate');

        Route::get('maid/detail/{id}', [MaidController::class, 'maidEdit'])->name('maid#updatePage');

        Route::get('maid/delete/{id}', [MaidController::class, 'maidDelete'])->name('maid#delete');

        Route::get('maid/editPage/{id}', [MaidController::class, 'editPage'])->name('maid#editPage');

        Route::post('maid/update', [MaidController::class, 'maidUpdate'])->name('maid#update');


        // housekeeping

        Route::get('housekeepingPage', [HousekeepingController::class, 'housekeepingPage'])->name('housekeeping#page');

        Route::get('housekeeping/create', [CategoryController::class, 'housekeepingCreatePage'])->name('housekeeping#create');

        Route::post('housekeeping', [HousekeepingController::class, 'housekeepingCreate'])->name('housekeeping#aftercreate');

        Route::get('housekeeping/detail/{id}', [HousekeepingController::class, 'housekeepingEdit'])->name('housekeeping#updatePage');

        Route::get('housekeeping/delete/{id}', [HousekeepingController::class, 'housekeepingDelete'])->name('housekeeping#delete');

        Route::get('housekeeping/editPage/{id}', [HousekeepingController::class, 'editPage'])->name('housekeeping#editPage');

        Route::post('housekeeping/update', [HousekeepingController::class, 'housekeepingUpdate'])->name('housekeeping#update');



        // maid, cook

        Route::get('maidcookPage', [MaidcookController::class, 'maidcookPage'])->name('maidcook#page');

        Route::get('maidcook/create', [CategoryController::class, 'maidcookCreatePage'])->name('maidcook#create');

        Route::post('maidcook', [MaidcookController::class, 'maidcookCreate'])->name('maidcook#aftercreate');

        Route::get('maidcook/detail/{id}', [MaidcookController::class, 'maidcookEdit'])->name('maidcook#updatePage');

        Route::get('maidcook/delete/{id}', [MaidcookController::class, 'maidcookDelete'])->name('maidcook#delete');

        Route::get('maidcook/editPage/{id}', [MaidcookController::class, 'editPage'])->name('maidcook#editPage');

        Route::post('maidcook/update', [MaidcookController::class, 'maidcookUpdate'])->name('maidcook#update');


        // maid, eldercare

        Route::get('maideldercarePage', [MaideldercareController::class, 'maideldercarePage'])->name('maideldercare#page');

        Route::get('maideldercare/create', [CategoryController::class, 'maideldercareCreatePage'])->name('maideldercare#create');

        Route::post('maideldercare', [MaideldercareController::class, 'maideldercareCreate'])->name('maideldercare#aftercreate');

        Route::get('maideldercare/detail/{id}', [MaideldercareController::class, 'maideldercareEdit'])->name('maideldercare#updatePage');

        Route::get('maideldercare/delete/{id}', [MaideldercareController::class, 'maideldercareDelete'])->name('maideldercare#delete');

        Route::get('maideldercare/editPage/{id}', [MaideldercareController::class, 'editPage'])->name('maideldercare#editPage');

        Route::post('maideldercare/update', [MaideldercareController::class, 'maideldercareUpdate'])->name('maideldercare#update');


        // maid, pet care

        Route::get('maidpetcarePage', [MaidpetcareController::class, 'maidpetcarePage'])->name('maidpetcare#page');

        Route::get('maidpetcare/create', [CategoryController::class, 'maidpetcareCreatePage'])->name('maidpetcare#create');

        Route::post('maidpetcare', [MaidpetcareController::class, 'maidpetcareCreate'])->name('maidpetcare#aftercreate');

        Route::get('maidpetcare/detail/{id}', [MaidpetcareController::class, 'maidpetcareEdit'])->name('maidpetcare#updatePage');

        Route::get('maidpetcare/delete/{id}', [MaidpetcareController::class, 'maidpetcareDelete'])->name('maidpetcare#delete');

        Route::get('maidpetcare/editPage/{id}', [MaidpetcareController::class, 'editPage'])->name('maidpetcare#editPage');

        Route::post('maidpetcare/update', [MaidpetcareController::class, 'maidpetcareUpdate'])->name('maidpetcare#update');


        // premium nanny

        Route::get('premiumnannyPage', [PremiumnannyController::class, 'premiumnannyPage'])->name('premiumnanny#page');

        Route::get('premiumnanny/create', [CategoryController::class, 'premiumnannyCreatePage'])->name('premiumnanny#create');

        Route::post('premiumnanny', [PremiumnannyController::class, 'premiumnannyCreate'])->name('premiumnanny#aftercreate');

        Route::get('premiumnanny/detail/{id}', [PremiumnannyController::class, 'premiumnannyEdit'])->name('premiumnanny#updatePage');

        Route::get('premiumnanny/delete/{id}', [PremiumnannyController::class, 'premiumnannyDelete'])->name('premiumnanny#delete');

        Route::get('premiumnanny/editPage/{id}', [PremiumnannyController::class, 'editPage'])->name('premiumnanny#editPage');

        Route::post('premiumnanny/update', [PremiumnannyController::class, 'premiumnannyUpdate'])->name('premiumnanny#update');




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







