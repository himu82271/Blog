@extends('layouts.app')
@section('create')

<body>
    <div class="container">
        <div class="submit">
            <form action="{{url('/user/manage/update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <label class="drop_target">
                    <div class="image_preview"></div>
                    <input input name="image" id="inputFile" type="file" accept="image/*"/>
                  </label>
                        <div class="image_details">
                            <label class="input_line image_title">
                              <input type="text" value="{{$blog->image}}"/>
                            </label> 
                        </div>      
                        <input type="hidden" name="id" value="{{$blog->id}}"  >

                        <input type="text" name="title" value="{{$blog->title}}" placeholder="Give A Title" >
                            <textarea class="description" name="description" value="{{$blog->description}}"  placeholder="Please give descriptions" rows="4" cols="50">
                            </textarea>
                            <br>
                            <button type="submit">Save</button> <br>
            </form>
        </div>
    </div>
</body>
@endsection