<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Maidpetcare;
use Illuminate\Http\Request;

class MainmaidpetcareController extends Controller
{
    //
    public function maidpetcarePage()
    {
        $maidpetcares = Maidpetcare::orderBy('id', 'desc')->paginate(12);
        return view('user.main.maid_petcare.maidpetcare', compact('maidpetcares'));
    }

    public function maidpetcareInfo($id)
    {
        $maidpetcares = Maidpetcare::where('id', $id)->first();
        return view('user.main.maid_petcare.maidpetcaredetails', compact('maidpetcares'));
    }

    public function maidpetcareRequestPage()
    {
        return view('user.main.maid_petcare.requestform');
    }
}
