<?php

namespace App\Http\Controllers\User;

use App\Models\Maid;
use App\Models\Nanny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Housekeeping;
use App\Models\Maideldercare;
use App\Models\Maidpetcare;
use App\Models\Premiumnanny;

class AjaxController extends Controller
{
    // nanny, maid
    public function nannyList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Nanny::where('full_part', 'full-time')->get();
        } else if ($request->status == 'part-time') {
            $data = Nanny::where('full_part', 'part-time')->get();
        } else if ($request->status == 'live-In')
        {
            $data = Nanny::where('live_in_out', 'live-In')->get();
        } else if ($request->status == 'live-Out')
        {
            $data = Nanny::where('live_in_out', 'live-Out')->get();
        }

        return $data;
    }

    // maid
    public function maidList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Maid::where('full_part', 'full-time');
        } else if ($request->status == 'part-time') {
            $data = Maid::where('full_part', 'part-time');
        } else if ($request->status == 'live-In') {
            $data = Maid::where('live_in_out', 'live-In');
        } else if ($request->status == 'live-Out') {
            $data = Maid::where('live_in_out', 'live-Out');
        }
        return $data;


    }

    // housekeeping
    public function housekeepingList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Housekeeping::where('full_part', 'full-time')->get();
        } else if ($request->status == 'part-time') {
            $data = Housekeeping::where('full_part', 'part-time')->get();
        } else if ($request->status == 'live-In') {
            $data = Housekeeping::where('live_in_out', 'live-In')->get();
        } else if ($request->status == 'live-Out') {
            $data = Housekeeping::where('live_in_out', 'live-Out')->get();
        }
        return $data;
    }

    // housekeeping
    public function maidcookList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Housekeeping::where('full_part', 'full-time')->get();
        } else if ($request->status == 'part-time') {
            $data = Housekeeping::where('full_part', 'part-time')->get();
        } else if ($request->status == 'live-In') {
            $data = Housekeeping::where('live_in_out', 'live-In')->get();
        } else if ($request->status == 'live-Out') {
            $data = Housekeeping::where('live_in_out', 'live-Out')->get();
        }
        return $data;
    }

    // maid, elder care

    public function maideldercareList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Maideldercare::where('full_part', 'full-time')->get();
        } else if ($request->status == 'part-time') {
            $data = Maideldercare::where('full_part', 'part-time')->get();
        } else if ($request->status == 'live-In') {
            $data = Maideldercare::where('live_in_out', 'live-In')->get();
        } else if ($request->status == 'live-Out') {
            $data = Maideldercare::where('live_in_out', 'live-Out')->get();
        }
        return $data;
    }

    // maid, pet care
    public function maidpetcareList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Maidpetcare::where('full_part', 'full-time')->get();
        } else if ($request->status == 'part-time') {
            $data = Maidpetcare::where('full_part', 'part-time')->get();
        } else if ($request->status == 'live-In') {
            $data = Maidpetcare::where('live_in_out', 'live-In')->get();
        } else if ($request->status == 'live-Out') {
            $data = Maidpetcare::where('live_in_out', 'live-Out')->get();
        }
        return $data;
    }

    // premium nanny
    public function premiumnannyList(Request $request)
    {
        // logger($request->status);
        if ($request->status == 'full-time') {
            $data = Premiumnanny::where('full_part', 'full-time')->get();
        } else if ($request->status == 'part-time') {
            $data = Premiumnanny::where('full_part', 'part-time')->get();
        } else if ($request->status == 'live-In') {
            $data = Premiumnanny::where('live_in_out', 'live-In')->get();
        } else if ($request->status == 'live-Out') {
            $data = Premiumnanny::where('live_in_out', 'live-Out')->get();
        }
        return $data;
    }

}
