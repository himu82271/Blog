<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Profile;
use App\User;

use Illuminate\Support\Facades\Auth;
use DB;


class ArticleController extends Controller
{
    public function article($id){
    // $blog=DB::table('blogs')
    // ->join('users','users.id','blogs.user_id')
    // ->where('blogs.user_id','=','user_id')
    // ->select('users.name','blogs.*')
    // ->get();
    $fulldetail=Blog::find($id);
    // return $fulldetail;
    return view('user.article',compact('fulldetail'));
    }
}
