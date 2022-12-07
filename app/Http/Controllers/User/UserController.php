<?php

namespace App\Http\Controllers\User;


use App\Models\Nanny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
<<<<<<< HEAD
    public function home(){
=======
    public function home()
    {
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
        $nannies = Nanny::orderBy('id', 'desc')->paginate(3);
        return view('user.main.home', compact('nannies'));
    }

<<<<<<< HEAD
    public function nannyInfo($id){
        $nannies = Nanny::where('id', $id)->first();
        // dd($nannies);
=======
    public function nannyInfo($id)
    {
        $nannies = Nanny::where('id', $id)->first();
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
        return view('user.main.nannydetails', compact('nannies'));


        // $nannies = Nanny::find($id);
        // return response()->json($nannies);

        // $nannies = Nanny::all();
        // return view('user.main.home', compact('nannies'));

        // return Nanny::findOrFail($id);
    }

<<<<<<< HEAD


=======
>>>>>>> c8fa2e517d73995b196903b23a3bde9f26db6725
    public function requestForm()
    {
        return view('user.main.requestform');
    }
}
