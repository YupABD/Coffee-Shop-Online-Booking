@extends('Layouts.main')

@section('Section_between')
    

        

    

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-primary font-weight-medium m-0 " style="letter-spacing: 1.4rem">Coffee-Makes you Love</h1>
                        <h2 class="display-6 text-white m-0">A Lot Can Happen Over Coffee, Its Awsome!!!</h2>
                        
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="{{url('#blog-carousel')}}" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="{{url('#blog-carousel')}}" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


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
                    <h5 class="mb-3">Once upon a time in the bustling city of Bellaville, there stood a quaint little coffee cafe called "KOPPEE."</h5>
                    <p>It was nestled between towering buildings, its charming exterior inviting passersby to step into a world of warm aromas and cozy ambiance.And so, the story of KOPPEE lives on—a tale of a coffee cafe that filled the cups of its patrons with warmth and their hearts with endless inspiration, forever etching its name in the tapestry of the city and the lives of those who cherished it.</p>
                    <a href="{{url('#')}}" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
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


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Fresh & Organic Beans</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-1.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Fastest Door Delivery</h4>
                            <p class="m-0">Introducing "Swift Bites," the fastest food delivery service in town! With Swift Bites, your cravings are just moments away from being satisfied.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-2.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Fresh Coffee Beans</h4>
                            <p class="m-0"> We believe in preserving the natural freshness of our coffee beans, which is why we carefully package them to seal in their exquisite flavors. Our airtight bags protect the beans from oxidation,ensuring that they retain their aromatic potency until they reach your hands.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-3.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Best Quality Coffee</h4>
                            <p class="m-0">We hold ourselves to the highest standards of quality control.From the moment the beans arrive at our roastery to the final cup poured, we maintain a relentless commitment to delivering the utmost in quality and flavor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('img/service-4.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Online Table Booking</h4>
                            <p class="m-0">Our online booking platform features a user-friendly interface designed to make the reservation process as smooth as possible. Easily navigate through the website to find the perfect table for your desired date, time, and party size.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-1.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Black Coffee, a classic favorite that celebrates the essence of pure coffee goodness.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-2.jpg')}}" alt="">
                            <h5 class="menu-price">$7</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolete Coffee</h4>
                            <p class="m-0">Creamy Milk, Chocolate, Beans, and some love</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-3.jpg')}}" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Prepared with the perfect balance, robust coffee and creamy milk, That will satisfy your cravings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-1.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Smoothness of the cold brew concentrate meets the invigorating chill of ice</p>
                    
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-2.jpg')}}" alt="">
                            <h5 class="menu-price">$7</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolete Coffee</h4>
                            <p class="m-0">Coffee with milk and Chocolate to create a velvety and creamy texture.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('img/menu-3.jpg')}}" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">A classic favorite that celebrates the essence of pure coffee goodness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">30% OFF</h1>
                                <h1 class="text-white">For Online Reservation</h1>
                            </div>
                            <p class="text-white">Say goodbye to waiting on hold. Our online reservation platform offers a seamless way to book your preferred services from the comfort of your own home.</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Availability for immediate booking confirmation.</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Instant confirmation via email. </li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Accessible anytime, anywhere, from any device.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                            <form class="mb-5" action="{{url('reservation')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control bg-transparent border-primary p-4" placeholder="Name"
                                            required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                            required="required" />
                                    </div>
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input name="date" type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input name="time" type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="persons" class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                            <option selected>Person</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book Now</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


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
    

