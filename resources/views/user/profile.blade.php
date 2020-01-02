
@extends('layouts.app')
@section('content')



<aside class="profile-card">
	{{-- <h1>
		<img class="image" {{asset($reginfo->name)}} />
	</h1> --}}
	
	<header>

		<!-- here’s the avatar -->
		

		<!-- the username -->
		<h1>{{($reginfo->name)}}</h1>

		<!-- and role or location -->
		<h2>{{$reginfo->email}}</h2>

	</header>

	<!-- bit of a bio; who are you? -->
	
	<!-- some social links to show off -->
	<ul class="profile-social-links">

		<!-- twitter - el clásico  -->
		<li>
			<a href="https://www.facebook.com">
                <svg viewBox="0 0 24 24">
                    <path fill="#3b5998" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
                </svg>
            </a>
		</li>

		
	</ul>

	<a class="button3" href="/profile/edit/{{$userinfo->user_id}}"> Edit Profile </a>
</aside>
<!-- that’s all folks! -->
    @endsection