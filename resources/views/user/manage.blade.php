
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/manageTable.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="block">
                    <table style="width:100%" class="fl-table">
                            <thead>
                            <tr>
                            <th>SL.</th>
                            <th>Image</th> 
                            <th></th>
                            <th>Post Now</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                            </thead>
                            @php
                            $j = 0;
                            @endphp
                       @foreach ($blogs as $blog)
                     <tbody>
                        <tr>
                        <td>{{++$j}}</td>
                        <td><img height="100px" width="100px" src="{{asset($blog->image)}}" alt=""></td>
                        <td> 
                          
                        </td>
                        <td>
                            
                            @if($blog->ispublished==0)
                            <a  href="/user/publish-unpublish/{{$blog->id}}" ><button onclick="return confirm('Are you sure?')">Publish!</button></a>
                            @else
                            <a  href="/user/publish-unpublish/{{$blog->id}}" ><button onclick="return confirm('Are you sure?')">Unpublish!</button></a>
                            @endif



                        </td>
                         <td><a  href="/user/manage/edit/{{$blog->id}}"><button>Edit!</button></a>
                        </td>
                        <td><a  href="/user/manage/delete/{{$blog->id}}" ><button onclick="return confirm('Are you sure?')">Delete!</button></a>
                        </td>
                        </tr>
                     </tbody>
                        @endforeach
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection