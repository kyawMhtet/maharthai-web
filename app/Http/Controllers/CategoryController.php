<?php

namespace App\Http\Controllers;



class CategoryController extends Controller
{
    //
    public function list(){
        return view('admin.category.list');
    }

    // customer page
    public function customerPage(){
        return view('admin.category.customer');
    }

    // nanny create page
    public function nannyCreatePage(){
        return view('admin.category.nannycreate');
    }
}
