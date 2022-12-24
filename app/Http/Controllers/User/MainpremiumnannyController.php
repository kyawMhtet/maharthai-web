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

    public function premiumnannyRequestPage($id)
    {
        $premiumnannies = Premiumnanny::where('id', $id)->first();
        return view('user.main.premium_nanny.requestform', compact('premiumnannies'));
    }

    public function premiumnannySearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $premiumnannies = Premiumnanny::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $premiumnannies->appends(request()->all());

        return view('user.main.premium_nanny.premiumnanny', compact('premiumnannies'));
    }


}
