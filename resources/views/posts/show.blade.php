<link href="{{ asset('css/sample.css') }}" rel="stylesheet">
@extends('Layouts.app')

@section('content')
    <a href="/Laravel_Learning/s01project/public/posts" ><button>Go Back</button> </a>
    <h1>{{$posts->title}}</h1>

    <div class="layered-card">
        <img style="width:100%" src="/Laravel_Learning/s01project/public/storage/cover_images/{{$posts->cover_image}}">
    </div>
   
    <!--<div class="row">
        <div class="col-md-12">
            <img style="width:100%" src="/Laravel_Learning/s01project/public/storage/cover_images/{{$posts->cover_image}}">
        </div>
    </div> -->
    <hr>
    <h3>{{$posts->body}}</h3>

    <hr>
    <small><h6>Created at {{ $posts->created_at}}</h6></small> 
    
    @if(!Auth::guest())
        @if(Auth::user()->id==$posts->user_id)
             <a href="/Laravel_Learning/s01project/public/posts/{{$posts->id}}/edit" class="btn btn-secondary btn-lg btn-block">Edit</a>
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $posts->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class'=> 'btn btn-danger btn-lolg btn-block'])}}
            {!!form::close()!!}
        @else()
            <h5>You are NOT the owner of the this post </h5>
        @endif()
    @else()
        <small>You need to loggin or register to edit/delete the posts</small>
    @endif()
    
@endsection

