@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <div class="row">
        <div class="form-group">
        <a href="{{url('posts')}}" class="btn btn-success btn-mg float-right">Add a Post</a>
        <br>
        </div>
     
        @if($posts->count())
      
          @foreach($posts as $post)
            <div class="card">
            Posted by<b>{{$post->user->user_name}}</b>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p> 
                
                <p class="card-text">{{$post->comments_count}} Comments</p>
                <a href="{{url('postShow/'.$post->id)}}" class="btn btn-primary">View Post</a>

                @if($post->user->is_admin == 1 || $post->user->id == Auth::user()->id )         
                <a href="{{url('postEdit/'.$post->id)}}" class="btn btn-warning">Edit</a>   
                @endif
               
            </div>
            </div>
            @endforeach
            @else
            <h5 class="card-title">No Post</h5>
            @endif
        </div>

    </div>


@endsection