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

    // nanny create page
    public function nannyCreatePage()
    {
        return view('admin.category.nannycreate');
    }
}
