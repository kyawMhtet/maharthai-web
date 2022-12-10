<?php

namespace App\Http\Controllers\User;

use App\Models\Maid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainMaidController extends Controller
{
    //
    public function maidPage()
    {
        $maids = Maid::orderBy('id', 'desc')->paginate(12);
        return view('user.main.maid.maid', compact('maids'));
    }

    public function maidInfo($id)
    {
        $maids = Maid::where('id', $id)->first();
        return view('user.main.maid.maiddetails', compact('maids'));
    }

    public function maidRequestPage()
    {
        return view('user.main.maid.requestform');
    }

    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
