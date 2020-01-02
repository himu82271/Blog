<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Profile;
use App\User;

use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function index()
    {   
        $users=Profile::where('id',Auth::user()->id)->first();
        $blogs = Blog::where('ispublished',1)->get();
        $filldetail=DB::table('blogs')
        ->where('ispublished',1)
    ->join('profiles','blogs.user_id','profiles.user_id')
    ->select('blogs.*','profiles.userImage','profiles.fullName')
    ->get();
    //  return $filldetail;
    return view('timeline2',compact(['blogs','users','filldetail']));
        
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $user= Auth::user()->id;
        $imageFile = $request->file('image'); 
        $imageName = $imageFile->getClientOriginalName();
        $uploadPath = '../public/images/';
        $imageFile->move($uploadPath, $imageName);
        $imageFullPath = '/images/'.$imageName;
        $blog = new Blog();
        $blog->user_id=$user;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageFullPath;
        $blog->ispublished = $request->post;
        $blog->save();
        $blogs = Blog::get();
        return view('user.manage',compact(['blogs']));
       
    }

public function manage(){
    $blogs=DB::table('blogs')
    ->join('users','blogs.user_id','users.id')
    ->where('users.id',Auth::user()->id)
    ->select('blogs.*','users.name')
    ->get();
    return view('user.manage',compact('blogs','unposted'));
}


public function storeProfile(Request $request)
    {
        $user= Auth::user()->id;
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $uploadPath = '../public/images/';
        $image->move($uploadPath, $imageName);
        $imageFullPath = '/images/'.$imageName;
        $blog->user_id=$user;
        $blog = new Profile();
        $blog->image = $imageFullPath;
        $blog->fullName = $request->fullName;
        $blog->userName = $request->userName;
        $blog->location = $request->location;
        $blog->age=$request->age;
        $blog->website = $request->website;
        $blog->about=$request->about;
        $blog->save();
        $blogs=profile::get();
        return $blogs;
        return view('/user.profile',compact('blogs'));
  
    }
    public function edit($id){
        $blog=Blog::find($id);
        return view('user.edit',compact(['blog']));
    }

    public function update(Request $request){
        $blog=Blog::find($request->id);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $uploadPath = '../public/images/';
        $image->move($uploadPath, $imageName);
        $imageFullPath = '/images/'.$imageName;
        $blog->image= $imageFullPath;
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->update();
        $blogs=Blog::all();
        return view('user.manage',compact(['blogs']));
    }
    public function delete($id){
        $post=Blog::find($id);
        $post->delete();
        $blog=Blog::all();
         return view('user.manage',compact(['blog']));
    }

    public function publishUnpublish($id)
    {
        $blog = Blog::find($id);
        $blog->ispublished = !$blog->ispublished;
        $blog->update();
        return redirect()->back();
    }

    
    

}

