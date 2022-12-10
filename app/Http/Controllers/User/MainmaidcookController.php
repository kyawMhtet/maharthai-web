<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Maidcook;
use Illuminate\Http\Request;

class MainmaidcookController extends Controller
{
    //
    public function maidcookPage()
    {
        $maidcooks = Maidcook::orderBy('id', 'desc')->paginate(12);
        return view('user.main.maid_cook.maidcook', compact('maidcooks'));
    }

    public function maidcookInfo($id)
    {
        $maidcooks = Maidcook::where('id', $id)->first();
        return view('user.main.maid_cook.maidcookdetails', compact('maidcooks'));
    }

    public function maidcookRequestPage()
    {
        return view('user.main.maid_cook.requestform');
    }
}
