<?php

namespace App\Http\Controllers\User;


use App\Models\Nanny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function home()
    {
        $nannies = Nanny::orderBy('id', 'desc')->paginate(12);
        return view('user.main.home', compact('nannies'));
    }

    public function nannyInfo($id)
    {
        $nannies = Nanny::where('id', $id)->first();
        // dd($nannies);
        return view('user.main.nannydetails', compact('nannies'));
    }

    public function requestForm($id)
    {
        $nannies = Nanny::where('id', $id)->first();
        return view('user.main.requestform', compact('nannies'));
    }


    public function nannySearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $nannies = Nanny::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $nannies->appends(request()->all());

        return view('user.main.home', compact('nannies'));
    }



}
