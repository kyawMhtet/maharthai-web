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

    public function maideldercareRequestPage()
    {
        return view('user.main.maid_eldercare.requestform');
    }
}
