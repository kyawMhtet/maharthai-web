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

    public function houseKeepingPage()
    {
        return view('admin.category.housekeeping.housekeeping');
    }

    // nanny create page
    public function nannyCreatePage()
    {
        return view('admin.category.nannycreate');
    }
}
