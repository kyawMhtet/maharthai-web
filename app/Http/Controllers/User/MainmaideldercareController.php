<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Maideldercare;
use Illuminate\Http\Request;

class MainmaideldercareController extends Controller
{
    //
    public function maideldercarePage()
    {
        $maideldercares = Maideldercare::orderBy('id', 'desc')->paginate(12);
        return view('user.main.maid_eldercare.maideldercare', compact('maideldercares'));
    }

    public function maideldercareInfo($id)
    {
        $maideldercares = Maideldercare::where('id', $id)->first();
        return view('user.main.maid_eldercare.maideldercaredetails', compact('maideldercares'));
    }

    public function maideldercareRequestPage($id)
    {
        $maideldercares = Maideldercare::where('id', $id)->first();
        return view('user.main.maid_eldercare.requestform', compact('maideldercares'));
    }


    public function maideldercareSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $maideldercares = Maideldercare::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $maideldercares->appends(request()->all());

        return view('user.main.maid_eldercare.maideldercare', compact('maideldercares'));
    }


}
