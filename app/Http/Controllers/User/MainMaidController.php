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


    public function maidRequestPage($id)
    {
        $maids = Maid::where('id', $id)->first();
        return view('user.main.maid.requestform', compact('maids'));
    }


    public function maidSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $maids = Maid::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $maids->appends(request()->all());

        return view('user.main.maid.maid', compact('maids'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
