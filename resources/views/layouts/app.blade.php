<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body >

<div class="container body" style="max-width:100% !important;margin:0; padding:0;">
    <div class="main_container">
<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="main_home">Voyager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('main_home') ? 'active' : '' }}">
        <a class="nav-link" href="main_home">Home</a>
      </li>
	  
	  <li class="nav-item">
    <a class="nav-link" href="{{route('posts')}}">Your Posts</a>
       
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Users List</a>
          <a class="dropdown-item" href="">Posts List</a>
  
        </div>
      </li>
    </ul>
	  <ul class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link disable" href="">{{ auth()->user()->first_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
            </li>
        </ul>
  </div>
  
</nav> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('dashboard')}}">Sherji</a>
    <a class="navbar-brand" href="{{route('dashboard')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('currentUserPost')}}">Your Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('userList')}}">Users Lists</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('userProfile')}}">{{ auth()->user()->user_name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</div>
</body>

</html>