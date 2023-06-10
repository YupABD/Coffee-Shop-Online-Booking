@extends('Layouts.main')

@section('Section_between')
    

        



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About Us</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{url('/main')}}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">About Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 1950</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">"Once upon a time in the bustling city of Bellaville, there stood a quaint little coffee cafe called "KOPPEE."</h5>
                    <p>It was nestled between towering buildings, its charming exterior inviting passersby to step into a world of warm aromas and cozy ambiance.And so, the story of KOPPEE lives on—a tale of a coffee cafe that filled the cups of its patrons with warmth and their hearts with endless inspiration, forever etching its name in the tapestry of the city and the lives of those who cherished it.</p>
                    
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/about.png')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <p>Outside, the world rushed by, but within KOPPEE, time seemed to slow down. The aroma of coffee mingled with the sound of clinking cups, creating an atmosphere that enveloped visitors in a sense of comfort.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Aromas of freshly brewed coffee.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Local art adorns the walls.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Coffee becomes a catalyst for connection.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Patrons find solace within the cozy space.</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @endsection


   


   