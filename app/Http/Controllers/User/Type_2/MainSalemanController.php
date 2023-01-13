<?php

namespace App\Http\Controllers\User\Type_2;

use App\Models\Saleman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainSalemanController extends Controller
{
    //
    public function salemanPage()
    {
        $salemen = Saleman::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type2.saleman.saleman', compact('salemen'));
    }

    public function salemanInfo($id)
    {
        $salemen = Saleman::where('id', $id)->first();
        return view('user.main.Type2.saleman.salemandetails', compact('salemen'));
    }


    public function salemanRequestPage($id)
    {
        $salemen = Saleman::where('id', $id)->first();
        return view('user.main.Type2.saleman.requestform', compact('salemen'));
    }


    public function salemanSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $salemen = Saleman::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $salemen->appends(request()->all());

        return view('user.main.Type2.saleman.saleman', compact('salemen'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
