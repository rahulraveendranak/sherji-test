@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

<form action="{{ route('posts') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
  <div class="col-6">
    <label for="title" class="form-label">Title</label>
    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title">
  </div>
  <div class="col-6">
    <label for="description" class="form-label">Description </label>
    <textarea name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Enter Description">
</textarea>
</div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Post</button>
  </div>
  </div>
</div>
</form>
</div>



@endsection