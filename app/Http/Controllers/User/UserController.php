<?php

namespace App\Http\Controllers\User;

use App\Models\Nanny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function home(){
        $nannies = Nanny::get();
        return view('user.main.home', compact('nannies'));
    }
}
