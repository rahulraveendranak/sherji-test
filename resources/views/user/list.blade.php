@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <div class="row">
        @if($users->count())
        <h5 class="card-title">User Lists with post count</h5>

          @foreach($users as $user)
            <div class="card">
  
            <div class="card-body">
                <h5 class="card-title">{{$user->first_name}} {{$user->second_name}}</h5>
                <p class="card-text">{{$user->email}}</p> 
                
                <p class="card-text">{{$user->posts_count}} Posts</p>      
               
            </div>
            </div>
            @endforeach
            @else
            <h5 class="card-title">No User</h5>
            @endif
        </div>

    </div>


@endsection