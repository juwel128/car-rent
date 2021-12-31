<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @livewireStyles
    @livewireScripts
    <style>
body{
  margin: 0;
  background-color: #A4A0A3;
  font-family: 'Scada', 'Sans-serif';
  font-weight: 400;
}
.header{
  border: 1px solid black;
  background-color: #E70BAE;
  margin: 0;
}
  
.inner-header{
  width: 85%;
  margin: 0 auto;
}
.header::after{
  clear: both;
  display: table;
  content: '';
}



/* Logo */
.logo{
  float: left;
  padding: 5px 0;
}
.logo img{
  float: left;
}





/* Nav*/
.nav{
  float: right;
}

.nav ul{
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.nav li{
  position: relative;
  display: inline-block;
  margin-left: 60px;
  padding: 30px 0px 30px 0px;
  width: 110px;
  text-align: center;
}

.nav li a {
  text-decoration: none;
  color: #303030; 
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

.nav li a:hover{
  color: #000000;
}

.nav li a:before{
  content: '';
  display: block;
  width: 0%;
  height: 5px;
  background-color: #000000;
  position: absolute;
  top: 0;
  transition: .3s;
}

.nav li a:hover::before{
  width: 100%;
}

.nav li a:after{
  content: '';
  display: block;
  width: 0%;
  height: 2px;
  background-color: #000000;
  position: absolute;
  bottom: 0;
  transition: .3s;
  right: 0;
}
.nav li a:hover::after{
  width: 100%; 
}

    </style>
    <title>Quick Cars</title>
</head>

<body>
      <div id="layout-wrapper">
        <!-- Start Nav Bar -->
        <div class="header">
    <div class="inner-header">
    <div class="logo">
      <img class="rounded" src="{{ asset('car-logo.jpg') }}" width="70px" height="70px">
    </div>

    <div class="nav">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="{{ route('add-car') }}">Add Car</a></li>
        <li><a href="{{ route('confirm-rent') }}">Details</a></li>
        <li>
        <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">{{Auth::user()->name}}</a>
				<div class="dropdown-menu">					
				<a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
            </div>
        </li>
      </ul>
    </div>
    </div>
  </div>
        <!-- End Nav Bar -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{$slot}}
                </div>
                <!-- container-fluid -->
            </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>

@stack('scripts')

</body>

</html>
