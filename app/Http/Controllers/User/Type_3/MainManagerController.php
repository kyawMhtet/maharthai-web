<?php

namespace App\Http\Controllers\User\Type_3;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class MainManagerController extends Controller
{
    //
    public function managerPage()
    {
        $managers = Manager::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type3.manager.manager', compact('managers'));
    }

    public function managerInfo($id)
    {
        $managers = Manager::where('id', $id)->first();
        return view('user.main.Type3.manager.managerdetails', compact('managers'));
    }


    public function managerRequestPage($id)
    {
        $managers = Manager::where('id', $id)->first();
        return view('user.main.Type3.manager.requestform', compact('managers'));
    }


    public function managerSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $managers = Manager::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $managers->appends(request()->all());

        return view('user.main.Type3.manager.manager', compact('managers'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
