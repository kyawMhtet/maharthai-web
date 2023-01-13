<?php

namespace App\Http\Controllers\User\Type_2;

use App\Http\Controllers\Controller;
use App\Models\Generalworker;
use Illuminate\Http\Request;

class MainGeneralworkerController extends Controller
{
    //
    public function generalworkerPage()
    {
        $generalworkers = Generalworker::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type2.Generalworker.generalworker', compact('generalworkers'));
    }

    public function generalworkerInfo($id)
    {
        $generalworkers = Generalworker::where('id', $id)->first();
        return view('user.main.Type2.Generalworker.generalworkerdetails', compact('generalworkers'));
    }


    public function generalworkerRequestPage($id)
    {
        $generalworkers = Generalworker::where('id', $id)->first();
        return view('user.main.Type2.Generalworker.requestform', compact('generalworkers'));
    }


    public function generalworkerSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $generalworkers = Generalworker::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $generalworkers->appends(request()->all());

        return view('user.main.Type2.Generalworker.generalworker', compact('generalworkers'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
