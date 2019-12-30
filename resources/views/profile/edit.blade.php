@extends('layouts.app')
@section('content')


<aside class="profile-card">

	<header>

	<h2>Profile Picture</h2>
  <form action="{{route('profile.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
  <div class="settings_wrap">
    <label class="drop_target">
      <div class="image_preview"></div>
      <input id="inputFile" name="image" type="file" accept="image/*"/>
    </label>

      <input class="input" type="text" name="fullName" placeholder="Full Name" >
      <input class="input" type="text" name="userName" placeholder="User Name" >
      <input class="input" type="text" name="location" placeholder="Location" >
      <input class="input" type="text" name="age" placeholder="Age" >
      <input class="input" type="text" name="website" placeholder="Website" >
      <textarea  class="input" type="text" name="about" placeholder="About"> </textarea> 

    <button type="submit" value="1" name="post">Update</button> <br>
      
  </form>
          
         
    @endsection