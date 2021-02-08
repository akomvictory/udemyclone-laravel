@extends('layouts.header_footer')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
          Danisoft Social Login!
          </h4>
         </div>         
          <div class="card-body">
            <div class="row">
              <div class="col my-2">
                <button class="btn btn-block btn-facebook">
                 <i class="ti-facebook mr-1"></i>
                 <span>Facebook Sign in</span>
               </button>
              </div>
              <div class="col my-2">
                <button class="btn btn-block btn-google-plus">
                 <i class="ti-google mr-1"></i>
                 <span>Google Sign in</span>
               </button>
              </div>
            </div>
            <p class="text-center my-4">
            {{ __('Login') }}
            </p>
            <form  action="{{ route('login') }}"  aria-label="{{ __('Login') }}" method="POST" class="px-lg-4">
                    @csrf
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                                <input id="email" type="email" class="border-left-0 pl-0 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
     



              </div>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                                <input id="password" type="password" class="border-left-0 pl-0 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
              </div>



      



              <div class="d-md-flex justify-content-between my-4">
                <label class="ec-checkbox check-sm my-2 clearfix">
                  <input type="checkbox" name="checkbox">
                  <span class="ec-checkbox__control"></span>
                  <span class="ec-checkbox__lebel">{{ __('Remember Me') }}</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-primary my-2 d-block">{{ __('Forgot Your Password?') }}</a>
              </div>
              
              <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Login') }}
                                </button>
              <p class="my-5 text-center">
                Don’t have an account? <a href="{{ __('Register') }}" class="text-primary">Register</a>

           
              </p>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div>




@endsection
