@extends('layouts.app')

@section('content')
<style>
.txt_c{
	text-align:center;
}
.main_div{
	padding-top: 15px;
}
</style>
<div class="container main_div">


<div class="row">
  <div class="col-6">
    <label for="title" class="form-label">Title</label>
    <label class="form-control" id="title">{{$data->title}} </label>
  </div>
  <div class="col-6">
    <label for="description" class="form-label">Description </label>
  <label name="description" type="text" class="form-control" id="description">{{$data->description}}
</label>
</div>


  
</div>
<br>
<h4 class="txt_c">Comments</h4>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<div class="row">
<form action="{{ url('commentAdd/'.$data->id) }}"  method="POST" autocomplete="off" style="width:100%;">
		{{csrf_field()}}
<div class="col-sm-4 offset-sm-4">

<div class="form-group">
<label>Add comment</label>
<input type="text" name="comment" class="form-control" placeholder="Enter a comment" />
</div>


<div class="form-group txt_c">
<input type="submit"  class="btn btn-primary"  value="Submit"  />
</div>

</div>
</form>

</div>
@if(count($comments))
	<div class="row">
<div class="col-sm-4 offset-sm-4">
 <table class="table table-hover">
    <thead>
      <tr>
        <th>comment</th>
        <th>added by</th>
   
      </tr>
    </thead>
    <tbody>
	@foreach($comments as $comment)
      <tr>
        <td>{{$comment->description}}</td>
        <td>{{$comment->user->user_name}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
</div>
@endif
  
  </div>





@endsection