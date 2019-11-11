<!DOCTYPE html>
<html>
<head>
	<title>Digital Diary- @yield('title')  </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1" >


</head>
<body>
    
@section('navbar')
@section('navbar')
            <nav class="navbar navbar-expand-sm bg-light">
              <ul class="navbar-nav">
                 <li class="nav-item">
                    <a id="index" class="navbar-brand" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a id="index" class="navbar-brand" href="{{url('/about')}}">About </a>                    
                </li>
                <li class="nav-item">
                    <a id="index" class="navbar-brand" href="{{url('/login')}}">Log In</a>
                </li>
                <li class="nav-item">
                 <a id="index" class="navbar-brand" href="{{url('/signin')}}">Sign Up </a>                  
                </li>
                <li class="nav-item">
                 <a id="index" class="navbar-brand" href="{{url('/contact')}}">Contact Us</a>                  
                </li>
              </ul>
            </nav>
        @show

    <div class="container">
            @yield('content')
        </div>

</body>
</html>