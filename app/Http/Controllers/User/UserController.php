<?php

namespace App\Http\Controllers\User;


use App\Models\Nanny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function home(){
        $nannies = Nanny::orderBy('id', 'desc')->paginate(3);
        return view('user.main.home', compact('nannies'));
    }

    public function nannyInfo($id){
        $nannies = Nanny::where('id', $id)->first();
        // dd($nannies);
        return view('user.main.nannydetails', compact('nannies'));


        // $nannies = Nanny::find($id);
        // return response()->json($nannies);

        // $nannies = Nanny::all();
        // return view('user.main.home', compact('nannies'));

        // return Nanny::findOrFail($id);
    }



    public function requestForm()
    {
        return view('user.main.requestform');
    }
}
