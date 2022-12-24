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

    public function maidpetcareRequestPage($id)
    {
        $maidpetcares = Maidpetcare::where('id', $id)->first();
        return view('user.main.maid_petcare.requestform', compact('maidpetcares'));
    }


    public function maidpetcareSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $maidpetcares = Maidpetcare::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $maidpetcares->appends(request()->all());

        return view('user.main.maid_petcare.maidpetcare', compact('maidpetcares'));
    }


}
