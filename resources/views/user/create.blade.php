@extends('layouts.app')
@section('create')

<div class="setting"></div>
<div class="setting image_picker">
  
  <form action="{{route('user.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <h2>Image</h2>
  <div class="settings_wrap">
    <label class="drop_target">
      <div class="image_preview"></div>
      <input id="inputFile" name="image" type="file" accept="image/*"/>
    </label>
      <input type="text" name="title" placeholder="Give A Title" >
      <textarea class="description" name="description"   placeholder="Please give descriptions" rows="4" cols="50">
      </textarea>
      <br>
      <button type="submit" value="1" name="post">Post Now</button> <br>
      <button type="submit" value="0" name="post">Save as Draft</button>

  </form>

      
  </div>

</div>


@endsection