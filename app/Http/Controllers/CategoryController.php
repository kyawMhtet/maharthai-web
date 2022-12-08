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

    // nanny create page
    public function nannyCreatePage()
    {
        return view('admin.category.nannycreate');
    }
}
