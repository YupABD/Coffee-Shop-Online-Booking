@extends('Layouts.main')

@section('Section_between')
    

        


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonial</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{url('/main')}}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Testimonial</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset('img/testimonial-1.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Samantha Brewy</h4>
                            <i>Customer care specialist</i>
                        </div>
                    </div>
                    <p class="m-0">Customer specialists handle customer complaints, process orders and ensure customer satisfaction throughout the buying process.</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset('img/testimonial-2.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>John Doe</h4>
                            <i>Administrative assistant</i>
                        </div>
                    </div>
                    <p class="m-0">Administrative assistants work with multiple departments to schedule meetings.He interact with clients and notify them of important changes.</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset('img/testimonial-3.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Dua Lipa</h4>
                            <i>Help desk analyst</i>
                        </div>
                    </div>
                    <p class="m-0">Helps a company's customers resolve IT issues,provide high-level technical support.Answer incoming inquiries by email,prioritize different customer requests.</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset('img/testimonial-4.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Khalid Khabib</h4>
                            <i>Account manager</i>
                        </div>
                    </div>
                    <p class="m-0">Account managers ensure they meet client campaign goals.Ensure the timely responses and develop strategies to increase sales and client satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @endsection
   

