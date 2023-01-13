<?php

namespace App\Http\Controllers\User\Type_2;

use App\Http\Controllers\Controller;
use App\Models\Gardener;
use Illuminate\Http\Request;

class MainGardenerController extends Controller
{
    //
    public function gardenerPage()
    {
        $gardeners = Gardener::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type2.gardener.gardener', compact('gardeners'));
    }

    public function gardenerInfo($id)
    {
        $gardeners = Gardener::where('id', $id)->first();
        return view('user.main.Type2.gardener.gardenerdetails', compact('gardeners'));
    }


    public function gardenerRequestPage($id)
    {
        $gardeners = Gardener::where('id', $id)->first();
        return view('user.main.Type2.gardener.requestform', compact('gardeners'));
    }


    public function gardenerSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $gardeners = Gardener::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $gardeners->appends(request()->all());

        return view('user.main.Type2.gardener.gardener', compact('gardeners'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
