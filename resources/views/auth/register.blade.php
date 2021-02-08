@extends('layouts.header_footer')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
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
            <form  action="{{ route('register') }}"  aria-label="{{ __('Register') }}" method="POST" class="px-lg-4">
                    @csrf
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                                <input id="name" type="text" class="border-left-0 pl-0 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
     



              </div>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                                <input id="email" type="email" class="border-left-0 pl-0 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

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




              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>





              
              <button type="submit" class="btn btn-block btn-primary">
                                    
                                    {{ __('Register') }}
                               
                                </button>
              <p class="my-5 text-center">
                Already signup? <a href="{{ __('Loging') }}" class="text-primary">Login</a>

           
              </p>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div>




@endsection
