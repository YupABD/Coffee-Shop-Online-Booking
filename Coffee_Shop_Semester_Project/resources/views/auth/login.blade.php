

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.6.1/css/all.css')}}"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="{{url('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
{{-- <link rel="stylesheet" href="{{url('css/style.css')}}"> --}}


<style>

    /* -----------------login-----------------*/
    


body {

    background-image: url("img/back_img.jpg") ;
  
  /* Add the blur effect */
  /* filter: blur(8px); */
    /* -webkit-filter: blur(8px); */
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  /* background-position: center; */
  background-repeat: no-repeat;
  background-size:cover;
  /* opacity: 0.7; */

    }


.bg_log_reg_text {
    
    
    color: rgb(255, 255, 255);
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
}

  .user_card {
      height: 500px;
    width: 450px;
    margin-top: auto;
    margin-bottom: auto;
    background: transparent;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(255, 255, 255, 0.5);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(255, 255, 255, 0.5);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(255, 255, 255, 0.5);
    border-radius: 5px;
    
}
  .brand_logo_container {
      position: absolute;
      height: 170px;
      width: 170px;
      top: -75px;
    border-radius: 50%;
    background: transparent;
    padding: 10px;
    text-align: center;
}
  .brand_logo {
      height: 150px;
      width: 150px;
      border-radius: 50%;
      border: 2px solid white;
    }
    .form_container {
        margin-top: 100px;
    }
    .login_btn {
        width: 100%;
        background: rgb(218, 159, 91)!important;
        color: white !important;
    }
    .reg_btn {
    width: 100%;
    background: rgb(218, 159, 91)!important;
    color: white !important;
  }
  .login_btn:focus ,
  .reg_btn:focus 
       {
           box-shadow: none !important;
           outline: 0px !important;
        }
        .login_container,
        .reg_container
        {
    padding: 0 2rem;
}
  .input-group-text {
      background: rgb(218, 159, 91) !important;
      color: white !important;
      border: 0 !important;
      border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: rgb(218, 159, 91)!important;
  }

      .links a{
          color: rgb(218, 159, 91) !important;
          text-decoration: none !important;
      }


      </style>


</head>


<body>

   

    <div class="bg_log_reg_text ">

    
        <div class="container h-100 ">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="{{asset('img/Coffee Shop LOgO.jpeg')}}"
                            class="brand_logo" alt="Logo" style="width: 100%; height: 100%;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form  action="{{route('Login-User')}}" method="post">
                        @csrf
                        <span class="" style="color: rgb(218, 159, 91);">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                            <div class="input-group mb-3 ">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="email" class="form-control input_user" value=""
                                    placeholder="email">
                                    
                            </div>
                           
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control input_pass" value=""
                                    placeholder="password">
                                    
                            </div>
                            <span class="" style="color: rgb(218, 159, 91)">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" name="button" class="btn login_btn">Login</button>
                            </div>

                            @if (Session::has('l-success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('l-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::has('l-error'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('l-error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
                        </form>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="{{url('/registration')}}" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

 
</body>

</html>