<?php

namespace App\Http\Controllers\User\Type_2;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class MainDriverController extends Controller
{
    //
    public function driverPage()
    {
        $drivers = Driver::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type2.driver.driver', compact('drivers'));
    }

    public function driverInfo($id)
    {
        $drivers = Driver::where('id', $id)->first();
        return view('user.main.Type2.driver.driverdetails', compact('drivers'));
    }


    public function driverRequestPage($id)
    {
        $drivers = Driver::where('id', $id)->first();
        return view('user.main.Type2.driver.requestform', compact('drivers'));
    }


    public function driverSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $drivers = Driver::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $drivers->appends(request()->all());

        return view('user.main.Type2.driver.driver', compact('drivers'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
