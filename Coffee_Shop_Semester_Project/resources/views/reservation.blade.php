
@extends('Layouts.main')

@section('Section_between')
    

        

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Reservation</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{url('/main')}}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Reservation</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Reservation Start -->
    <div class="container-fluid py-5">
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
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Instant confirmation via email.</li>
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
                                         />
                                        <span class="text-danger"> 
                                            @error('name')
                                            {
                                                {{$message}}
                                            }
                                                
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                       />
                                        <span class="text-danger"> 
                                            @error('email')
                                            {
                                                {{$message}}
                                            }
                                                
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input name="date" type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                        <span class="text-danger"> 
                                            @error('date' )
                                            {
                                                {{$message}}
                                            }
                                                
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        
                                        <input name="time" type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                        <span class="text-danger"> 
                                            @error('time')
                                            {
                                                {{$message}}
                                            }
                                                
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <select name="persons" class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                        <option selected>Person</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>

                                        {{-- @if ($errors->has('persons')) --}}
                                    {{-- <span class="invalid-feedback" role="alert"> --}}
                                        {{-- <strong>{{ $errors->first('persons') }}</strong> --}}
                                        <span class="text-danger">
                                        @error('persons')
                                        {
                                            {{$message}}
                                        }
                                        @enderror
                                        
                                    </span>
                                         {{-- @endif --}}
                                    </select>

                                   
                                </div>
                                
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book Now</button>
                                </div>

                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        ></button>
                                </div>
                            @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    <!-- Reservation End -->


   

    @endsection
  