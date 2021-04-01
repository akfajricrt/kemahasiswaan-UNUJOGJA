@extends('layouts.auth')

@section('title','Login')
    
    


@section('content')
<div class="container">
    <div class="row justify-content-center " style="margin-top: 20px; margin-bottom: 50px;">
        <div class="col-md-8">
            <div class="card border-0">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body border-0">
									<div class="text-center mb-3">
										<img src="{{ url('frontend/img/logo.png')}}" alt="" width="100px">
										
									</div>
                    <div class="judul-form mb-3 text-center">
                        <h3>{{ __('Login Kemahasiswaan') }}</h3>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mt-3">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="col-md-6">
                                
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                         
                    </form>
                    <div class="text-right">
                        <span>Anda belum daftar<a href="{{url('register')}}"> Daftar</a></span>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection


