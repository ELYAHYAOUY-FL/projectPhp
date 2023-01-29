@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
      <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                 </div>
                <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror " placeholder="username"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
						
		</div>
        <div>
		    <div class="input-group form-group">
					<div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
					<input type="password"  id="password"class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
		</div>
		<div class="remember">
            
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><p></p>Remember Me</p>
            <!-- <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
            </label> -->
		</div>
		<div class="form-group">
            
            <button type="submit" class="btn float-right login_btn">
                                    {{ __('Login') }}
            </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link links" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
					</div>
				</form>

			</div>
			<!-- <div class="card-footer"> -->
				<!-- <div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div> -->
				<!-- <div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
@endsection
