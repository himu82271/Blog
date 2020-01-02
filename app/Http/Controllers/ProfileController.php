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
        return view('user.profile',compact(['userinfo','reginfo']));
        }





        public function userprofile($user_id)
    {
    //    $profile=DB::table('profiles')
    // ->join('users','profiles.user_id','users.id')
    // ->where('users.id',Auth::user()->id)
    // ->select('profiles.*','users.name')
    // ->get();
    $fulldetail=Profile::find($user_id);
    return view('profile.userprofile',compact('fulldetail'));
        }





    public function profile_edit($user_id){
    $profile=DB::table('profiles')
    ->join('users','profiles.user_id','users.id')
    ->where('users.id',Auth::user()->id)
    ->select('profiles.*','users.name')
    ->get();
    $profile=Profile::find($user_id);
    return view('profile.edit',compact('profile'));
    }

    public function profile_update(Request $request){
        $imageFile = $request->file('userImage'); 
        
        $imageName = $imageFile->getClientOriginalName();
        $uploadPath = '../public/images/';
        $imageFile->move($uploadPath, $imageName);
        $imageFullPath = '/images/'.$imageName;
        $user=Profile::find($request->user_id);
        $user->userImage=$imageFullPath;
        $user->fullName=$request->fullName;
        $user->userName=$request->userName;
        $user->location=$request->location;
        $user->age=$request->age;
        $user->website=$request->website;
        $user->about=$request->about;
        $user->update();
        return redirect('/user/profile');
 }

    public function store(Request $request)
    {
        $image = $request->file('userImage');
        $imageName = $image->getClientOriginalName();
        $uploadPath = '../public/images/';
        $image->move($uploadPath, $imageName);
        $imageFullPath = '/images/'.$imageName;
        $user= Auth::user()->id;
        $blog = new Profile();
        $blog->user_id=$user;
        $blog->userImage = $imageFullPath;
        $blog->fullName = $request->fullName;
        $blog->userName = $request->userName;
        $blog->location = $request->location;
        $blog->age=$request->age;
        $blog->website = $request->website;
        $blog->about=$request->about;
        $blog->save();
        return redirect('/user/profile');
  
    }
}
