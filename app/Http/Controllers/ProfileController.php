<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Profile;
use App\User;

use Illuminate\Support\Facades\Auth;
use DB;

class ProfileController extends Controller
{
    public function profile()
    {
        $userinfo=Profile::where('id',Auth::user()->id)->first();
        $reginfo=User::where('id',Auth::user()->id)->first();
        return view('user.profile',compact('userinfo','reginfo'));
        
    }
}
