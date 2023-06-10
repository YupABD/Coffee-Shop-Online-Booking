<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coffee Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   

    <!-- Favicon -->
    <link href="{{url('img/favicon.ico')}}" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap')}}" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('css/style.min.css')}}" rel="stylesheet">
</head>

<body>

     <!-- Navbar Start -->
 <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="{{url('/main')}}" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-5 text-uppercase text-white">COFFEE SHOP</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="{{url('/main')}}"  class="nav-item nav-link  ">Home</a>
                <a href="{{url('/about')}}"  class="nav-item nav-link ">About</a>
                <a href="{{url('/service')}}"  class="nav-item nav-link">Service</a>
                <a href="{{url('/menu')}}" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="{{url('/reservation')}}"  class="dropdown-item">Reservation</a>
                        <a href="{{url('/testimonial')}}"  class="dropdown-item">Testimonial</a>
                        <a href="{{url('/myorder')}}"  class="dropdown-item">My Order</a>
                    </div>
                </div>
                <a href="{{url('/contact')}}"   class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->