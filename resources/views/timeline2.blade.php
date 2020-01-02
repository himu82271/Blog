    @extends('layouts.app')
    @section('content')

  
    <span class="first"> 
        Timeline
    </span>
   
   

    

        {{-- this is the avatar part --}}
       
        @foreach ($filldetail as $blog)

        <ul class="timeline">
          <li>
            <a href="/user/userprofile/{{($blog->user_id)}}">

            <div class="avatar" >
              <img src="{{($blog->userImage)}}">
              <div class="hover">
                <div class="icon-twitter"></div>
              </div>
              <p class="name">{{($blog->fullName)}} </p>
            </div>
            </a>
              
              <figure class="card"> 
              <figure class='gallery-image'>
                <a href="/user/article/{{($blog->id)}}">

              <img height='120' src="{{asset($blog->image)}}" width='140'><br>
                </a>
              <figcaption>{{$blog->title}} </figcaption>
              </figure>
             </figure>
           
          </li>
        </ul>
        @endforeach
            
  
        
     
     

      
  </body>
  @endsection
