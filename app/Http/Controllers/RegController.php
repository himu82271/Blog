<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;

class RegController extends Controller
{
    public function fullRegister(){
        $hasFullDetails =  Profile::where('user_id',Auth::user()->id)->count();
        if($hasFullDetails) return redirect('/timeline2');
        return view ('FullRegister.fullRegister');
    }
}
