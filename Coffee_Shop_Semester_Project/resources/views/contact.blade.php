

@extends('Layouts.main')

@section('Section_between')
    

        

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Contact</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{url('/main')}}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Us</h4>
                <h1 class="display-4">Feel Free To Contact</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Address</h4>
                    <p>123 Street, Islamabad, Pakistan</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Phone</h4>
                    <p>+092 310 5063626</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Email</h4>
                    <p>ahmedjabar45656@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                        src="{{asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5451.6102155024555!2d72.78636819215333!3d33.74325990290387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa77a34e5ba2f%3A0xba887e5fc9f9c4ee!2sComsats%20University%20Wahcantt%20branch!5e0!3m2!1sen!2s!4v1684568866409!5m2!1sen!2s')}}"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      
                </div>
                <div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{url('contact')}}" method="post">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Your Name"
                                 name="name"   required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                                <span> 
                                    @error('name')
                                    {
                                        {{$message}}
                                    }
                                        
                                    @enderror
                                </span>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="email" placeholder="Your Email"
                                name="email"      required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>

                                <span> 
                                    @error('email')
                                    {
                                        {{$message}}
                                    }
                                        
                                    @enderror
                                </span>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="subject" placeholder="Subject"
                                name="subject"      required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                                <span> 
                                    @error('subject')
                                    {
                                        {{$message}}
                                    }
                                        
                                    @enderror
                                </span>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Message"
                                name="message"     required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                                <span> 
                                    @error('message')
                                    {
                                        {{$message}}
                                    }
                                        
                                    @enderror
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Send
                                    Message</button>

                                    @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            ></button>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @endsection



  