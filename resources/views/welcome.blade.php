<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="/">Metro Coffee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link " href="#">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
            </nav>

            <!-- Sliding Image -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

  @php 
  $i = 1;
  @endphp
  @foreach($sliders as $slider)
    <div class="carousel-item {{ $i == '1' ? 'active':''}} ">
    @php
    $i++;
    $file = (json_decode($slider->image))[0]->download_link;
    @endphp
      <img src="{{ Voyager::image ($file) }}" class="d-block w-100" width="500" height="500" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$slider->title}}</h5>
        <!-- <p>Some representative placeholder content for the first slide.</p> -->
        @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $add_error)
                <li>{{$add_error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session()->has('added'))
        <div class="alert alert-success" role="alert">
            {{session()->get('added')}}
        </div>
        @endif
        <form action="{{route('member.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""></label>
                <input type="email" name="email" placeholder="Email Address" id="">
            <button type="submit" class="btn btn-success btn-sm">Became a member</button>
            </div>
        </form>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- </div>  -->

        <!-- sponsers -->
        <div class="row pt-4 bg-light">   
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h2>Our Partners & Sponsers</h2>
                    <h2>Unity...</h2>
                </div>
            </div>
        </div>

        <div class="row bg-light">
            @foreach($sponsers as $sponser)
            <div class="col-lg-4 text-center">
                <div class="thumb">
                    @php
                    $file = (json_decode($sponser->image))[0]->download_link;
                    @endphp
                    <img src="{{ Voyager::image ($file)}}" class="rounded-circle" height="150" width="100" alt="">
                </div>
            </div>
            @endforeach
        </div>

        <!-- team members -->
        <div class="row bg-light">   
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h1>Our Team</h1>
                    <h2>Meet Our Team</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
        @foreach($teams as $team)
        <div class="card align-center col-md">
            <!-- <div class="card-header">
                <h4></h4>
            </div> -->
            <div class="card-body">
            <?php 
            $file = (json_decode($team->image))[0]->download_link;
            ?>
                <img src="{{ Voyager::image( $file ) }}" class="rounded-circle" height="100" width="150" alt="">
                <h4>{{$team->name}}</h4>
                <span>{{$team->position}}</span>
                <p>{!! $team->description !!}</p>
            </div>
        </div>
        @endforeach
        </div>

        <!-- Conversation -->
        <div class="row pt-5 bg-light">
            <div class="col-md-8 text-center">
                <h2>Contact Us</h2>
                <h4>For Enquiries</h4>
                <span><strong>Email:</strong>metrocoffee@gmail.com</span>
                <hr>
                    <strong>Address:</strong>Cranbook Rd Gants Hill Station llford, IG2 6UD<br>
                    <strong>Email:</strong>metrocoffee@gmail.com<br>
                    <strong>Phone:</strong>020 3239 8886
            </div>
            <div class="col-md-3 text-center bg-light">
                <h3 class="">Lets have conversation</h3>
                {{-- @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
                @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{route('customer.message')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-2">
                        <input type="text" name="name" class="form-control" placeholder="Name" id="">
                    </div>
                    <div class="form-group pb-2">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="">
                    </div>
                    <div class="form-group pb-2">
                        <textarea name="message" class="form-control" placeholder="Write a message" id="" cols="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <footer class="pt-4">
        <div class="fluid-container bg-light align-center">
            <div class="row ">
                <div class="col-sm-4">
                    <h1>Company Location</h1>
                </div>
            
                <div class="col-sm-4 text-center">
                    <div>
                        <a href="">Home</a>
                    </div>
                    <div>
                        <a href="">Service</a>
                    </div>
                    <div>
                        <a href="">Our Story</a>
                    </div>
                    <div>
                        <a href="">Contact Us</a>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <h2>Follow Us</h2>
                    <a href=""><span class="bi-facebook"></span></a>
                    <a href=""><span class="bi-twitter"></span></a>
                    <a href=""><span class="bi-instagram"></span></a>
                    <h5>Powered By:</h5>
                    <a href="">Click and Press Pvt Ltd</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg text-center">
                    <span> © Copyright Metro Coffee. All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>
   </html>
