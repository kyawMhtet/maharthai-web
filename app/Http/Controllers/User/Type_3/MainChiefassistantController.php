<?php

namespace App\Http\Controllers\User\Type_3;

use App\Http\Controllers\Controller;
use App\Models\Chiefassistant;
use Illuminate\Http\Request;

class MainChiefassistantController extends Controller
{
    //
    public function chiefassistantPage()
    {
        $chiefassistants = Chiefassistant::orderBy('id', 'desc')->paginate(12);
        return view('user.main.Type3.chiefassistant.chiefassistant', compact('chiefassistants'));
    }

    public function chiefassistantInfo($id)
    {
        $chiefassistants = Chiefassistant::where('id', $id)->first();
        return view('user.main.Type3.chiefassistant.chiefassistantdetails', compact('chiefassistants'));
    }


    public function chiefassistantRequestPage($id)
    {
        $chiefassistants = Chiefassistant::where('id', $id)->first();
        return view('user.main.Type3.chiefassistant.requestform', compact('chiefassistants'));
    }


    public function chiefassistantSearch()
    {
        // $data = $this->nannySearchData($request);

        // if ($request->full_part == 'full-time' && $request->live_in_out == 'live-In') {
        //     $nannies = Nanny::where('full_part', $request->full_part)->orWhere('live_in_out', $request->live_in_out)->get();
        //     $nannies->appends(request()->all());
        // }

        $chiefassistants = Chiefassistant::when(request('full_part', 'live_in_out'), function($query) {
            $query->where('full_part', 'like', '%' . request('full_part') . '%')
                    ->orWhere('live_in_out', 'like', '%' . request('live_in_out') . '%')
                    ->first();
        })
            ->orderBy('id', 'desc')
            ->paginate(12);
        $chiefassistants->appends(request()->all());

        return view('user.main.Type3.chiefassistant.chiefassistant', compact('chiefassistants'));
    }



    // public function requestForm()
    // {
    //     return view('user.main.maid.requestform');
    // }
}
