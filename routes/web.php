<?php

use App\Models\Nanny;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\MaidController;
use App\Http\Controllers\NannyController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChiefassistantController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\GardenerController;
use App\Http\Controllers\GeneralworkerController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\MaidcookController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\MaidpetcareController;
use App\Http\Controllers\HousekeepingController;
use App\Http\Controllers\KitchenhelperController;
use App\Http\Controllers\PremiumnannyController;
use App\Http\Controllers\MaideldercareController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SalemanController;
use App\Http\Controllers\User\AjaxController;
// main
use App\Http\Controllers\User\MainMaidController;
use App\Http\Controllers\User\MainmaidcookController;
use App\Http\Controllers\User\MainmaidpetcareController;
use App\Http\Controllers\User\MainHousekeepingController;
use App\Http\Controllers\User\MainpremiumnannyController;
use App\Http\Controllers\User\MainmaideldercareController;
use App\Http\Controllers\User\Type_2\MainDriverController;
use App\Http\Controllers\User\Type_2\MainGardenerController;
use App\Http\Controllers\User\Type_2\MainGeneralworkerController;
use App\Http\Controllers\User\Type_2\MainSalemanController;
use App\Http\Controllers\User\Type_3\MainCashierController;
use App\Http\Controllers\User\Type_3\MainChiefassistantController;
use App\Http\Controllers\User\Type_3\MainHelperController;
use App\Http\Controllers\User\Type_3\MainKitchenhelperController;
use App\Http\Controllers\User\Type_3\MainManagerController;

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

Route::get('/', [UserController::class, 'home'])->name('user#main');

Route::get('NannyMaidPage', [UserController::class, 'home'])->name('user#home');



// Route::get('/home/nanny/{id}', [NannyController::class, 'nannyDetail'])->name('nanny#detail');
Route::get('nannyRequestPage/{id}', [UserController::class, 'requestForm'])->name('nannyrequest#page');

Route::get('nanny_detail/{id}', [UserController::class, 'nannyInfo'])->name('nanny#info');

Route::get('nanny/request/{id}', [UserController::class, 'nannyRequest'])->name('nanny#request');

Route::get('nanny/search', [UserController::class, 'nannySearch'])->name('nanny#search');


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

Route::get('maidRequestPage/{id}', [MainMaidController::class, 'maidRequestPage'])->name('maidrequest#page');

Route::get('maid/search', [MainMaidController::class, 'maidSearch'])->name('maid#search');


// housekeeping page

Route::get('housekeepingPage', [MainHousekeepingController::class, 'housekeepingPage'])->name('mainhousekeeping#page');

Route::get('housekeeping_detail/{id}', [MainHousekeepingController::class, 'housekeepingInfo'])->name('housekeeping#info');

Route::get('housekeepingRequestPage/{id}', [MainHousekeepingController::class, 'housekeepingRequestPage'])->name('housekeepingrequest#page');

Route::get('housekeeping/search', [MainHousekeepingController::class, 'housekeepingSearch'])->name('housekeeping#search');


// maid, cook page

Route::get('maidcookPage', [MainmaidcookController::class, 'maidcookPage'])->name('mainmaidcook#page');

Route::get('maidcook_detail/{id}', [MainmaidcookController::class, 'maidcookInfo'])->name('maidcook#info');

Route::get('maidcookRequestPage/{id}', [MainmaidcookController::class, 'maidcookRequestPage'])->name('maidcookrequest#page');

Route::get('maidcook/search', [MainmaidcookController::class, 'maidcookSearch'])->name('maidcook#search');



// maid, eldercare page

Route::get('maideldercarePage', [MainmaideldercareController::class, 'maideldercarePage'])->name('mainmaideldercare#page');

Route::get('maideldercare_detail/{id}', [MainmaideldercareController::class, 'maideldercareInfo'])->name('maideldercare#info');

Route::get('maideldercareRequestPage/{id}', [MainmaideldercareController::class, 'maideldercareRequestPage'])->name('maideldercarerequest#page');

Route::get('maideldercare/search', [MainmaideldercareController::class, 'maideldercareSearch'])->name('maideldercare#search');


// maid, pet care page

Route::get('maidpetcarePage', [MainmaidpetcareController::class, 'maidpetcarePage'])->name('mainmaidpetcare#page');

Route::get('maidpetcare_detail/{id}', [MainmaidpetcareController::class, 'maidpetcareInfo'])->name('maidpetcare#info');

Route::get('maidpetcareRequestPage/{id}', [MainmaidpetcareController::class, 'maidpetcareRequestPage'])->name('maidpetcarerequest#page');

Route::get('maidpetcare/search', [MainmaidpetcareController::class, 'maidpetcareSearch'])->name('maidpetcare#search');



// premium nanny page

Route::get('premiumnannyPage', [MainpremiumnannyController::class, 'premiumnannyPage'])->name('mainpremiumnanny#page');

Route::get('premiumnanny_detail/{id}', [MainpremiumnannyController::class, 'premiumnannyInfo'])->name('premiumnanny#info');

Route::get('premiumnannyRequestPage/{id}', [MainpremiumnannyController::class, 'premiumnannyRequestPage'])->name('premiumnannyrequest#page');

Route::get('premiumnanny/search', [MainpremiumnannyController::class, 'premiumnannySearch'])->name('premiumnanny#search');


// Type 2

// Driver page

Route::get('driverPage', [MainDriverController::class, 'driverPage'])->name('maindriver#page');

Route::get('driver_detail/{id}', [MaindriverController::class, 'driverInfo'])->name('driver#info');

Route::get('driverRequestPage/{id}', [MaindriverController::class, 'driverRequestPage'])->name('driverrequest#page');

Route::get('driver/search', [MaindriverController::class, 'driverSearch'])->name('driver#search');

// Gardener page

Route::get('gardenerPage', [MainGardenerController::class, 'gardenerPage'])->name('maingardener#page');

Route::get('gardener_detail/{id}', [MainGardenerController::class, 'gardenerInfo'])->name('gardener#info');

Route::get('gardenerRequestPage/{id}', [MainGardenerController::class, 'gardenerRequestPage'])->name('gardenerrequest#page');

Route::get('gardener/search', [MainGardenerController::class, 'gardenerSearch'])->name('gardener#search');


// General worker page

Route::get('generalworkerPage', [MainGeneralworkerController::class, 'generalworkerPage'])->name('maingeneralworker#page');

Route::get('generalworker_detail/{id}', [MainGeneralworkerController::class, 'generalworkerInfo'])->name('generalworker#info');

Route::get('generalworkerRequestPage/{id}', [MainGeneralworkerController::class, 'generalworkerRequestPage'])->name('generalworkerrequest#page');

Route::get('generalworker/search', [MainGeneralworkerController::class, 'generalworkerSearch'])->name('generalworker#search');


// Sale Man page

Route::get('salemanPage', [MainSalemanController::class, 'salemanPage'])->name('mainsaleman#page');

Route::get('saleman_detail/{id}', [MainSalemanController::class, 'salemanInfo'])->name('saleman#info');

Route::get('salemanRequestPage/{id}', [MainSalemanController::class, 'salemanRequestPage'])->name('salemanrequest#page');

Route::get('saleman/search', [MainSalemanController::class, 'salemanSearch'])->name('saleman#search');


// Type 3

// Cashier

Route::get('cashierPage', [MainCashierController::class, 'cashierPage'])->name('maincashier#page');

Route::get('cashier_detail/{id}', [MainCashierController::class, 'cashierInfo'])->name('cashier#info');

Route::get('cashierRequestPage/{id}', [MainCashierController::class, 'cashierRequestPage'])->name('cashierrequest#page');

Route::get('cashier/search', [MainCashierController::class, 'cashierSearch'])->name('cashier#search');

// Manager

Route::get('managerPage', [MainManagerController::class, 'managerPage'])->name('mainmanager#page');

Route::get('manager_detail/{id}', [MainManagerController::class, 'managerInfo'])->name('manager#info');

Route::get('managerRequestPage/{id}', [MainManagerController::class, 'managerRequestPage'])->name('managerrequest#page');

Route::get('manager/search', [MainManagerController::class, 'managerSearch'])->name('manager#search');

// Helper

Route::get('helperPage', [MainHelperController::class, 'helperPage'])->name('mainhelper#page');

Route::get('helper_detail/{id}', [MainHelperController::class, 'helperInfo'])->name('helper#info');

Route::get('helperRequestPage/{id}', [MainHelperController::class, 'helperRequestPage'])->name('helperrequest#page');

Route::get('helper/search', [MainHelperController::class, 'helperSearch'])->name('helper#search');

// ChiefAssistant

Route::get('chiefassistantPage', [MainChiefassistantController::class, 'chiefassistantPage'])->name('mainchiefassistant#page');

Route::get('chiefassistant_detail/{id}', [MainChiefassistantController::class, 'chiefassistantInfo'])->name('chiefassistant#info');

Route::get('chiefassistantRequestPage/{id}', [MainChiefassistantController::class, 'chiefassistantRequestPage'])->name('chiefassistantrequest#page');

Route::get('chiefassistant/search', [MainChiefassistantController::class, 'chiefassistantSearch'])->name('chiefassistant#search');

// KitchenHelper

Route::get('kitchenhelperPage', [MainKitchenhelperController::class, 'kitchenhelperPage'])->name('mainkitchenhelper#page');

Route::get('kitchenhelper_detail/{id}', [MainKitchenhelperController::class, 'kitchenhelperInfo'])->name('kitchenhelper#info');

Route::get('kitchenhelperRequestPage/{id}', [MainKitchenhelperController::class, 'kitchenhelperRequestPage'])->name('kitchenhelperrequest#page');

Route::get('kitchenhelper/search', [MainKitchenhelperController::class, 'kitchenhelperSearch'])->name('kitchenhelper#search');









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
        Route::post('nanny/update/{id}', [NannyController::class, 'nannyUpdate'])->name('nanny#update');

        // nanny hide
        // Route::get('nanny/hide/{id}', [NannyController::class, 'nannyHide'])->name('nanny#hide');

        // nanny status
        // Route::post('nanny/stock', [NannyController::class, 'nannyStock'])->name('nanny#stock');



        // maid page

        Route::get('maidPage', [MaidController::class, 'maidPage'])->name('maid#page');

        Route::get('maid/create', [CategoryController::class, 'maidCreatePage'])->name('maid#create');

        Route::post('maid', [MaidController::class, 'maidCreate'])->name('maid#aftercreate');

        Route::get('maid/detail/{id}', [MaidController::class, 'maidEdit'])->name('maid#updatePage');

        Route::get('maid/delete/{id}', [MaidController::class, 'maidDelete'])->name('maid#delete');

        Route::get('maid/editPage/{id}', [MaidController::class, 'editPage'])->name('maid#editPage');

        Route::post('maid/update/{id}', [MaidController::class, 'maidUpdate'])->name('maid#update');


        // housekeeping

        Route::get('housekeepingPage', [HousekeepingController::class, 'housekeepingPage'])->name('housekeeping#page');

        Route::get('housekeeping/create', [CategoryController::class, 'housekeepingCreatePage'])->name('housekeeping#create');

        Route::post('housekeeping', [HousekeepingController::class, 'housekeepingCreate'])->name('housekeeping#aftercreate');

        Route::get('housekeeping/detail/{id}', [HousekeepingController::class, 'housekeepingEdit'])->name('housekeeping#updatePage');

        Route::get('housekeeping/delete/{id}', [HousekeepingController::class, 'housekeepingDelete'])->name('housekeeping#delete');

        Route::get('housekeeping/editPage/{id}', [HousekeepingController::class, 'editPage'])->name('housekeeping#editPage');

        Route::post('housekeeping/update/{id}', [HousekeepingController::class, 'housekeepingUpdate'])->name('housekeeping#update');


        // maid, cook

        Route::get('maidcookPage', [MaidcookController::class, 'maidcookPage'])->name('maidcook#page');

        Route::get('maidcook/create', [CategoryController::class, 'maidcookCreatePage'])->name('maidcook#create');

        Route::post('maidcook', [MaidcookController::class, 'maidcookCreate'])->name('maidcook#aftercreate');

        Route::get('maidcook/detail/{id}', [MaidcookController::class, 'maidcookEdit'])->name('maidcook#updatePage');

        Route::get('maidcook/delete/{id}', [MaidcookController::class, 'maidcookDelete'])->name('maidcook#delete');

        Route::get('maidcook/editPage/{id}', [MaidcookController::class, 'editPage'])->name('maidcook#editPage');

        Route::post('maidcook/update/{id}', [MaidcookController::class, 'maidcookUpdate'])->name('maidcook#update');


        // maid, eldercare

        Route::get('maideldercarePage', [MaideldercareController::class, 'maideldercarePage'])->name('maideldercare#page');

        Route::get('maideldercare/create', [CategoryController::class, 'maideldercareCreatePage'])->name('maideldercare#create');

        Route::post('maideldercare', [MaideldercareController::class, 'maideldercareCreate'])->name('maideldercare#aftercreate');

        Route::get('maideldercare/detail/{id}', [MaideldercareController::class, 'maideldercareEdit'])->name('maideldercare#updatePage');

        Route::get('maideldercare/delete/{id}', [MaideldercareController::class, 'maideldercareDelete'])->name('maideldercare#delete');

        Route::get('maideldercare/editPage/{id}', [MaideldercareController::class, 'editPage'])->name('maideldercare#editPage');

        Route::post('maideldercare/update/{id}', [MaideldercareController::class, 'maideldercareUpdate'])->name('maideldercare#update');


        // maid, pet care

        Route::get('maidpetcarePage', [MaidpetcareController::class, 'maidpetcarePage'])->name('maidpetcare#page');

        Route::get('maidpetcare/create', [CategoryController::class, 'maidpetcareCreatePage'])->name('maidpetcare#create');

        Route::post('maidpetcare', [MaidpetcareController::class, 'maidpetcareCreate'])->name('maidpetcare#aftercreate');

        Route::get('maidpetcare/detail/{id}', [MaidpetcareController::class, 'maidpetcareEdit'])->name('maidpetcare#updatePage');

        Route::get('maidpetcare/delete/{id}', [MaidpetcareController::class, 'maidpetcareDelete'])->name('maidpetcare#delete');

        Route::get('maidpetcare/editPage/{id}', [MaidpetcareController::class, 'editPage'])->name('maidpetcare#editPage');

        Route::post('maidpetcare/update/{id}', [MaidpetcareController::class, 'maidpetcareUpdate'])->name('maidpetcare#update');


        // premium nanny

        Route::get('premiumnannyPage', [PremiumnannyController::class, 'premiumnannyPage'])->name('premiumnanny#page');

        Route::get('premiumnanny/create', [CategoryController::class, 'premiumnannyCreatePage'])->name('premiumnanny#create');

        Route::post('premiumnanny', [PremiumnannyController::class, 'premiumnannyCreate'])->name('premiumnanny#aftercreate');

        Route::get('premiumnanny/detail/{id}', [PremiumnannyController::class, 'premiumnannyEdit'])->name('premiumnanny#updatePage');

        Route::get('premiumnanny/delete/{id}', [PremiumnannyController::class, 'premiumnannyDelete'])->name('premiumnanny#delete');

        Route::get('premiumnanny/editPage/{id}', [PremiumnannyController::class, 'editPage'])->name('premiumnanny#editPage');

        Route::post('premiumnanny/update/{id}', [PremiumnannyController::class, 'premiumnannyUpdate'])->name('premiumnanny#update');


        // Type (2)

        // Driver

        Route::get('driverPage', [DriverController::class, 'driverPage'])->name('driver#page');

        Route::get('driver/create', [CategoryController::class, 'driverCreatePage'])->name('driver#create');

        Route::post('driver', [DriverController::class, 'driverCreate'])->name('driver#aftercreate');

        Route::get('driver/detail/{id}', [DriverController::class, 'driverEdit'])->name('driver#updatePage');

        Route::get('driver/delete/{id}', [DriverController::class, 'driverDelete'])->name('driver#delete');

        Route::get('driver/editPage/{id}', [DriverController::class, 'editPage'])->name('driver#editPage');

        Route::post('driver/update/{id}', [DriverController::class, 'driverUpdate'])->name('driver#update');


        // Gardener

        Route::get('gardenerPage', [GardenerController::class, 'gardenerPage'])->name('gardener#page');

        Route::get('gardener/create', [CategoryController::class, 'gardenerCreatePage'])->name('gardener#create');

        Route::post('gardener', [GardenerController::class, 'gardenerCreate'])->name('gardener#aftercreate');

        Route::get('gardener/detail/{id}', [GardenerController::class, 'gardenerEdit'])->name('gardener#updatePage');

        Route::get('gardener/delete/{id}', [GardenerController::class, 'gardenerDelete'])->name('gardener#delete');

        Route::get('gardener/editPage/{id}', [GardenerController::class, 'editPage'])->name('gardener#editPage');

        Route::post('gardener/update/{id}', [GardenerController::class, 'gardenerUpdate'])->name('gardener#update');

        // General worker

        Route::get('generalworkerPage', [GeneralworkerController::class, 'generalworkerPage'])->name('generalworker#page');

        Route::get('generalworker/create', [CategoryController::class, 'generalworkerCreatePage'])->name('generalworker#create');

        Route::post('generalworker', [GeneralworkerController::class, 'generalworkerCreate'])->name('generalworker#aftercreate');

        Route::get('generalworker/detail/{id}', [GeneralworkerController::class, 'generalworkerEdit'])->name('generalworker#updatePage');

        Route::get('generalworker/delete/{id}', [GeneralworkerController::class, 'generalworkerDelete'])->name('generalworker#delete');

        Route::get('generalworker/editPage/{id}', [GeneralworkerController::class, 'editPage'])->name('generalworker#editPage');

        Route::post('generalworker/update/{id}', [GeneralworkerController::class, 'generalworkerUpdate'])->name('generalworker#update');


        // Sale Man

        Route::get('salemanPage', [SalemanController::class, 'salemanPage'])->name('saleman#page');

        Route::get('saleman/create', [CategoryController::class, 'salemanCreatePage'])->name('saleman#create');

        Route::post('saleman', [SalemanController::class, 'salemanCreate'])->name('saleman#aftercreate');

        Route::get('saleman/detail/{id}', [SalemanController::class, 'salemanEdit'])->name('saleman#updatePage');

        Route::get('saleman/delete/{id}', [SalemanController::class, 'salemanDelete'])->name('saleman#delete');

        Route::get('saleman/editPage/{id}', [SalemanController::class, 'editPage'])->name('saleman#editPage');

        Route::post('saleman/update/{id}', [SalemanController::class, 'salemanUpdate'])->name('saleman#update');


        // Type 3

        // Cashier

        Route::get('cashierPage', [CashierController::class, 'cashierPage'])->name('cashier#page');

        Route::get('cashier/create', [CategoryController::class, 'cashierCreatePage'])->name('cashier#create');

        Route::post('cashier', [CashierController::class, 'cashierCreate'])->name('cashier#aftercreate');

        Route::get('cashier/detail/{id}', [CashierController::class, 'cashierEdit'])->name('cashier#updatePage');

        Route::get('cashier/delete/{id}', [CashierController::class, 'cashierDelete'])->name('cashier#delete');

        Route::get('cashier/editPage/{id}', [CashierController::class, 'editPage'])->name('cashier#editPage');

        Route::post('cashier/update/{id}', [CashierController::class, 'cashierUpdate'])->name('cashier#update');

        // Manager

        Route::get('managerPage', [ManagerController::class, 'managerPage'])->name('manager#page');

        Route::get('manager/create', [CategoryController::class, 'managerCreatePage'])->name('manager#create');

        Route::post('manager', [ManagerController::class, 'managerCreate'])->name('manager#aftercreate');

        Route::get('manager/detail/{id}', [ManagerController::class, 'managerEdit'])->name('manager#updatePage');

        Route::get('manager/delete/{id}', [ManagerController::class, 'managerDelete'])->name('manager#delete');

        Route::get('manager/editPage/{id}', [ManagerController::class, 'editPage'])->name('manager#editPage');

        Route::post('manager/update/{id}', [ManagerController::class, 'managerUpdate'])->name('manager#update');

        // Helper

        Route::get('helperPage', [HelperController::class, 'helperPage'])->name('helper#page');

        Route::get('helper/create', [CategoryController::class, 'helperCreatePage'])->name('helper#create');

        Route::post('helper', [HelperController::class, 'helperCreate'])->name('helper#aftercreate');

        Route::get('helper/detail/{id}', [HelperController::class, 'helperEdit'])->name('helper#updatePage');

        Route::get('helper/delete/{id}', [HelperController::class, 'helperDelete'])->name('helper#delete');

        Route::get('helper/editPage/{id}', [HelperController::class, 'editPage'])->name('helper#editPage');

        Route::post('helper/update/{id}', [HelperController::class, 'helperUpdate'])->name('helper#update');


        // ChiefAssistant
        Route::get('chiefassistantPage', [ChiefassistantController::class, 'chiefassistantPage'])->name('chiefassistant#page');

        Route::get('chiefassistant/create', [CategoryController::class, 'chiefassistantCreatePage'])->name('chiefassistant#create');

        Route::post('chiefassistant', [ChiefassistantController::class, 'chiefassistantCreate'])->name('chiefassistant#aftercreate');

        Route::get('chiefassistant/detail/{id}', [ChiefassistantController::class, 'chiefassistantEdit'])->name('chiefassistant#updatePage');

        Route::get('chiefassistant/delete/{id}', [ChiefassistantController::class, 'chiefassistantDelete'])->name('chiefassistant#delete');

        Route::get('chiefassistant/editPage/{id}', [ChiefassistantController::class, 'editPage'])->name('chiefassistant#editPage');

        Route::post('chiefassistant/update/{id}', [ChiefassistantController::class, 'chiefassistantUpdate'])->name('chiefassistant#update');

        // KitchenHelper

        Route::get('kitchenhelperPage', [KitchenhelperController::class, 'kitchenhelperPage'])->name('kitchenhelper#page');

        Route::get('kitchenhelper/create', [CategoryController::class, 'kitchenhelperCreatePage'])->name('kitchenhelper#create');

        Route::post('kitchenhelper', [KitchenhelperController::class, 'kitchenhelperCreate'])->name('kitchenhelper#aftercreate');

        Route::get('kitchenhelper/detail/{id}', [KitchenhelperController::class, 'kitchenhelperEdit'])->name('kitchenhelper#updatePage');

        Route::get('kitchenhelper/delete/{id}', [KitchenhelperController::class, 'kitchenhelperDelete'])->name('kitchenhelper#delete');

        Route::get('kitchenhelper/editPage/{id}', [KitchenhelperController::class, 'editPage'])->name('kitchenhelper#editPage');

        Route::post('kitchenhelper/update/{id}', [KitchenhelperController::class, 'kitchenhelperUpdate'])->name('kitchenhelper#update');


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







