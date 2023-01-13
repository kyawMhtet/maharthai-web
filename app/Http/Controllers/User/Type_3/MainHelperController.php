<?php

namespace App\Http\Controllers\User\Type_3;

use App\Http\Controllers\Controller;
use App\Models\Helper;
use Illuminate\Http\Request;

class MainHelperController extends Controller
{
    //
    public function helperPage()
    {
        $helpers = Helper::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type3.helperworker.helper', compact('helpers'));
    }

    public function helperInfo($id)
    {
        $helpers = Helper::where('id', $id)->first();
        return view('user.main.Type3.helperworker.helperdetails', compact('helpers'));
    }


    public function helperRequestPage($id)
    {
        $helpers = Helper::where('id', $id)->first();
        return view('user.main.Type3.helperworker.requestform', compact('helpers'));
    }


    public function helperSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $helpers = Helper::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $helpers->appends(request()->all());

        return view('user.main.Type3.helperworker.helper', compact('helpers'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
