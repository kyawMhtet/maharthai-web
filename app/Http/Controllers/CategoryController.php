<?php

namespace App\Http\Controllers;



class CategoryController extends Controller
{
    //
    public function list()
    {
        return view('admin.category.list');
    }

    // customer page
    public function customerPage()
    {
        return view('admin.category.customer');
    }

    // maid create page
    public function maidCreatePage()
    {
        return view('admin.category.maid.maidcreate');
    }

    // housekeeping create page
    public function housekeepingCreatePage()
    {
        return view('admin.category.housekeeping.housekeepingcreate');
    }

    // maidcook create page
    public function maidcookCreatePage()
    {
        return view('admin.category.maid_cook.maidcookcreate');
    }

    // maideldercare create page
    public function maideldercareCreatePage()
    {
        return view('admin.category.maid_eldercare.maideldercarecreate');
    }

    // maid, pet care create page
    public function maidpetcareCreatePage()
    {
        return view('admin.category.maid_petcare.maidpetcarecreate');
    }

    // premium nanny create page
    public function premiumnannyCreatePage()
    {
        return view('admin.category.premium_nanny.premiumnannycreate');
    }

    // nanny create page
    public function nannyCreatePage()
    {
        return view('admin.category.nannycreate');
    }



    // Type(2)

    // Driver
    public function driverCreatePage()
    {
        return view('admin.category.Type2.driver.drivercreate');
    }

}
