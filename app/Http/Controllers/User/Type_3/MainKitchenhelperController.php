<?php

namespace App\Http\Controllers\User\Type_3;

use App\Http\Controllers\Controller;
use App\Models\Kitchenhelper;
use Illuminate\Http\Request;

class MainKitchenhelperController extends Controller
{
    //
    public function kitchenhelperPage()
    {
        $kitchenhelpers = Kitchenhelper::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type3.kitchenhelper.kitchenhelper', compact('kitchenhelpers'));
    }

    public function kitchenhelperInfo($id)
    {
        $kitchenhelpers = Kitchenhelper::where('id', $id)->first();
        return view('user.main.Type3.kitchenhelper.kitchenhelperdetails', compact('kitchenhelpers'));
    }


    public function kitchenhelperRequestPage($id)
    {
        $kitchenhelpers = Kitchenhelper::where('id', $id)->first();
        return view('user.main.Type3.kitchenhelper.requestform', compact('kitchenhelpers'));
    }


    public function kitchenhelperSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $kitchenhelpers = Kitchenhelper::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $kitchenhelpers->appends(request()->all());

        return view('user.main.Type3.kitchenhelper.kitchenhelper', compact('kitchenhelpers'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
