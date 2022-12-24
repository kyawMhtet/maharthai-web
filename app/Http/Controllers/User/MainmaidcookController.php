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

    public function maidcookRequestPage($id)
    {
        $maidcooks = Maidcook::where('id', $id)->first();
        return view('user.main.maid_cook.requestform', compact('maidcooks'));
    }


    public function maidcookSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $maidcooks = Maidcook::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $maidcooks->appends(request()->all());

        return view('user.main.maid_cook.maidcook', compact('maidcooks'));
    }


}
