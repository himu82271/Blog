<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function fullRegister(){
        return view ('FullRegister.fullRegister');
    }
}
