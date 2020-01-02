<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/fullRegister/fullRegister.css')}}" rel="stylesheet">
    <link href="{{asset('js/fullRegister.js')}}" rel="stylesheet">


</head>
<body>
    

  <div class="container">
    <form action={{url("/profile/store")}} method="POST" enctype="multipart/form-data">
      @csrf
      <h2>Image</h2>
  <div class="settings_wrap">
    <label class="drop_target">
      <div class="image_preview"></div>
      <input id="inputFile" name="userImage" type="file" accept="image/*"/>
    </label>
      
      <div class="row">
        <h4></h4>
        <div class="input-group input-group-icon">
          <input type="text" name="fullName" placeholder="Full Name"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <input type="text" name="userName" placeholder="User Name"/>
          <div class="input-icon"><i class="fa fa-envelope"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <input type="text" name="location" placeholder="Location"/>
          <div class="input-icon"><i class="fa fa-key"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <input type="text" name="age" placeholder="Age"/>
          <div class="input-icon"><i class="fa fa-key"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <input type="text" name="website" placeholder="Website"/>
          <div class="input-icon"><i class="fa fa-key"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <textarea rows="4" cols="60"  type="password" name="about" placeholder="Write Something About yourself"></textarea>
          <div class="input-icon"><i class="fa fa-key"></i></div>
        </div>
      </div>
      <button class="button" type="submit"  > Save
    </button>
    </form>
    
  </div>
  </body>

    </html>
