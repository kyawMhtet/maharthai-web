<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Housekeeping;

class MainHousekeepingController extends Controller
{
    //
    public function housekeepingPage()
    {
        $housekeepings = Housekeeping::orderBy('id', 'desc')->paginate(12);
        return view('user.main.housekeeping.housekeeping', compact('housekeepings'));
    }

    public function housekeepingInfo($id)
    {
        $housekeepings = Housekeeping::where('id', $id)->first();
        return view('user.main.housekeeping.housekeepingdetails', compact('housekeepings'));
    }

    public function housekeepingRequestPage($id)
    {
        $housekeepings = Housekeeping::where('id', $id)->first();
        return view('user.main.housekeeping.requestform', compact('housekeepings'));
    }


    public function housekeepingSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $housekeepings = Housekeeping::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $housekeepings->appends(request()->all());

        return view('user.main.housekeeping.housekeeping', compact('housekeepings'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.housekeeping.requestform');
    // }
}
