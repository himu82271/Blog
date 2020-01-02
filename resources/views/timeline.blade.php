@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
       
        <div class="col-md-8">
           
            <div class="block">
                <div class="userinfo">
            
                </div>
               
                    <figure class="card">
                        
                    @foreach ($blogs as $blog)
                    <figure class='gallery-image'>
                    <img height='120' src="{{asset($blog->image)}}" width='140'><br>
                    <figcaption>{{$blog->title}} </figcaption>
                    </figure>
                    
                    @endforeach
                </figure>
</div>
</div>
</div>
</div>
@endsection

    