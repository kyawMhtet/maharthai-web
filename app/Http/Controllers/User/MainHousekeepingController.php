<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Housekeeping;

class MainHousekeepingController extends Controller
{
    //
    public function housekeepingPage()
    {
        $housekeepings = Housekeeping::orderBy('id', 'desc')->paginate(3);
        return view('user.main.housekeeping.housekeeping', compact('housekeepings'));
    }

    public function housekeepingInfo($id)
    {
        $housekeepings = Housekeeping::where('id', $id)->first();
        return view('user.main.housekeeping.housekeepingdetails', compact('housekeepings'));
    }

    public function requestForm()
    {
        return view('user.main.maid.requestform');
    }
}
