<link href="{{ asset('css/sample.css') }}" rel="stylesheet">
@extends('Layouts.app')

@section('content')
    <h1>Posts Page.</h1>
    <hr>

        @if(count($posts)>0)
            <!--<div class="card>">  <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
                <ul class="list-group list-group-flush"> -->
                    @foreach($posts as $post)
                                                
                        <div class="three-dimensions-card">
                            <img style="width: 100%" src="storage/cover_images/{{$post->cover_image}}" alt="">
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>The Post I.D. is :{{$post->id}}</small>
                        </div>
                        <hr>
                        
                        
                    @endforeach
        @endif
    <a href="posts/create" ><button>Create</button> </a>  
@endsection