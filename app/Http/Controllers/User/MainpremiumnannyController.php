<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Premiumnanny;
use Illuminate\Http\Request;

class MainpremiumnannyController extends Controller
{
    //
    public function premiumnannyPage()
    {
        $premiumnannies = Premiumnanny::orderBy('id', 'desc')->paginate(12);
        return view('user.main.premium_nanny.premiumnanny', compact('premiumnannies'));
    }

    public function premiumnannyInfo($id)
    {
        $premiumnannies = Premiumnanny::where('id', $id)->first();
        return view('user.main.premium_nanny.premiumnannydetails', compact('premiumnannies'));
    }

    public function premiumnannyRequestPage()
    {
        return view('user.main.premium_nanny.requestform');
    }
}
