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



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">My Order</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{url('/main')}}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">My Order</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    {{------------------ Check Order -----------------}}
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-12 my-5 my-lg-0 d-flex justify-content-center align-items-center">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary ">Check Your Order</h1>
                                <h1 class="text-white text-center">Enter Your Name</h1>
                            </div>
                            <form action=""{{URL::to('myorder/search')}} method="get">
                                <div class="form-group">
                                    <input name="search"  type="text" class="form-control bg-transparent border-primary p-4" placeholder="Search"
                                         />
                                         <input type="hidden" name="search" value="{{$request->input('search')}}">
                                        <span class="text-danger"> 
                                            @error('search')
                                            {
                                                {{$message}}
                                            }
                                                
                                            @enderror
                                        </span>
                                </div>
                                <div>

                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Search Now</button>
                                </div>
                                <div>
                                   <br> 
                                </div>
                                <div>
                                    <button class="btn  form-control bg-transparent border-primary p-2 " type="submit"><a href="{{url('/myorder')}}">Reset</a></button>
                                </div>
                            
                            
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


@foreach ($reservations as $reserv)

<tr>

    <td>{{$reserve->id}}</td>
    <td>{{$reserve->name}}</td>
    <td>{{$reserve->email}}</td>
    <td>{{$reserve->persons}}</td>
    <td>{{$reserve->time}}</td>
    <td>{{$reserve->date}}</td>
    
</tr>

    
@endforeach





{{--    
    <div class="table-responsive ">
        @if(isset($reservations))
        <table class="table table-striped table-sm table table-hover">
            <thead> 
                <tr class="tb-head">
                <th >Table</th>
                <th >Name</th>
                <th >Email</th>
                <th >Persons</th>
                <th >Time</th>
                <th >Date</th>
                </tr>
            </thead>

          <tbody>

            @if(count($reservations) > 0)
            @foreach($reservations as $reserve)
            
            <tr>

                <td>{{$reserve->id}}</td>
                <td>{{$reserve->name}}</td>
                <td>{{$reserve->email}}</td>
                <td>{{$reserve->persons}}</td>
                <td>{{$reserve->time}}</td>
                <td>{{$reserve->date}}</td>
                
            </tr>
        
            @endforeach
            
            @else
            
            <tr>
                <td>No Result Found</td>
            </tr>

            @endif
            
          </tbody>
        </table>
        @endif
      </div> --}}


   


    {{-- <table class="table table-hover "  id="EmpTable">
       
        <thead> 
        <tr class="tb-head">
        <th >Table</th>
        <th >Name</th>
        <th >Email</th>
        <th >Persons</th>
        <th >Time</th>
        <th >Date</th>
        </tr>
        </thead>
        <tbody>


            @if(count($reservations) > 0)
            @foreach($reservations as $reserve)
            
            <td>{{$reserve->id}}</td>
            <td>{{$reserve->name}}</td>
            <td>{{$reserve->email}}</td>
            <td>{{$reserve->persons}}</td>
            <td>{{$reserve->time}}</td>
            <td>{{$reserve->date}}</td>
            
        
            @endforeach
            
            @else
            
            <tr>
                <td>No Result Found</td>
            </tr>

            @endif
        
        <!-- Using Blade Loop. -->
        @foreach ($reservation as $reservations)
        <tr>
        <td>{{$reservations->id}}</td>
        <td>{{$reservations->name}}</td>
        <td>{{$reservations->email}}</td>
        <td>{{$reservations->persons}}</td>
        <td>{{$reservations->time}}</td>
        <td>{{$reservations->date}}</td>
       
        
        </tr>
        @endforeach


        
        </tbody>
       
    </table>
    --}}


        













<!-- Footer Start -->
<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
            <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{url('#')}}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{url('#')}}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{url('#')}}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="{{url('#')}}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
            <div>
                <h6 class="text-white text-uppercase">Monday - Friday</h6>
                <p>8.00 AM - 8.00 PM</p>
                <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
            <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="{{url('#')}}">Domain</a>. All Rights Reserved.</a></p>
      
    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="{{url('#')}}" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-
pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  
<script >
  $(document).ready( function () {
$('#EmpTable').DataTable(
{
"pagingType": "full_numbers",
"lengthMenu": [
[5, 10, 25, 50, -1],
[5, 10, 25, 50, "All"]
],
responsive: true,
language: {
search: "",
searchPlaceholder: "Search",
}
}
); 
} );
</body>

</html>
    






   