@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <div class="row">
            
        <h5 class="card-title">Your Profile</h5>
        
            <div class="card">
  
            <div class="card-body">
                <h5 class="card-title">{{$current_user->first_name}} {{$current_user->second_name}}</h5>
                <p class="card-text">{{$current_user->email}}</p> 
                
                <p class="card-text">{{$current_user->posts_count}} Posts</p>      
               
            </div>
            </div>
         
        </div>

    </div>


@endsection