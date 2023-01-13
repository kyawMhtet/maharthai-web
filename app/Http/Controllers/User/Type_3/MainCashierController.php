<?php

namespace App\Http\Controllers\User\Type_3;

use App\Models\Cashier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainCashierController extends Controller
{
    //
    public function cashierPage()
    {
        $cashiers = Cashier::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type3.cashier.cashier', compact('cashiers'));
    }

    public function cashierInfo($id)
    {
        $cashiers = Cashier::where('id', $id)->first();
        return view('user.main.Type3.cashier.cashierdetails', compact('cashiers'));
    }


    public function cashierRequestPage($id)
    {
        $cashiers = Cashier::where('id', $id)->first();
        return view('user.main.Type3.cashier.requestform', compact('cashiers'));
    }


    public function cashierSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $cashiers = Cashier::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $cashiers->appends(request()->all());

        return view('user.main.Type3.cashier.cashier', compact('cashiers'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
