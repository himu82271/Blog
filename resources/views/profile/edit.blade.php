@extends('layouts.app')
@section('content')


<aside class="profile-card">

	<header>

	<h2>Profile Picture</h2>
  <form action="{{route('profile.update')}}" method="POST"  enctype="multipart/form-data">
    @csrf
  <div class="settings_wrap">
    <label class="drop_target">
      <div class="image_preview"></div>
      <input value="{{$profile->userImage}}" id="inputFile" name="userImage" type="file" accept="image/*"/>
    </label>

      <input class="input" type="text" value="{{$profile->fullName}}" name="fullName" placeholder="Full Name" >
      <input class="input" type="text" value="{{$profile->userName}}" name="userName" placeholder="User Name" >
      <input class="input" type="text" value="{{$profile->location}}" name="location" placeholder="Location" >
      <input class="input" type="text" value="{{$profile->age}}" name="age" placeholder="Age" >
      <input class="input" type="text" value="{{$profile->website}}" name="website" placeholder="Website" >
      <textarea  class="input" type="text" value="{{$profile->about}}" name="about" placeholder="About"> </textarea> 
      <input type="hidden" name="user_id" value="{{$profile->user_id}}"  >


    <button type="submit">Update</button> <br>
      
  </form>
          
         
    @endsection