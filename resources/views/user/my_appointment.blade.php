<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Cancer Insight Explorer </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
 
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +250 782 045 468</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> Ytech@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Cancer</span>-Insight Explorer</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            
             @if(Route::has('login'))
            @auth 
            <li class="nav-item">
              <a class="nav-link" href="{{ url('myappointment') }}" style="background-color:#00D9A5">My Appointment </a>
            </li>
            <x-app-layout/>
            @else 
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
            @endif 
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))

  <div class="alert alert-success">
      <button  type="button" class="close" data-dismiss="alert">X</button>
      {{session()->get('message')}}
  </div>
  @endif
  {{-- style="width: 1000px;margin-top: 100px;height: fit-content;margin-left: 305px;" --}}
  <div style="margin-top: 80px" > 
    <h1 style="font-size:20;font-weight:600;margin-left: 750px ; margin-bottom:10px">My Appointment</h1>
    <table class="table table-hover" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Doctor</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Cancel</th>
          </tr>
        </thead>
        <tbody>
            @if ($appointments->count() > 0)
            @foreach($appointments as $appointment)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->message }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td><a href="{{url('cancel_appoint',$appointment->id)}}" class="bt btn-danger" onclick="return confirm('are you sure you want to delete this')">Cancel</a></td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">No appointments found for the user.</td>
            </tr>
        @endif
        
        </tbody>
      </table>
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
