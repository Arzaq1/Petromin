
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{URL::asset('fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/style_2.css')}}" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  {{ route('login') }} method="post" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>



            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
               @enderror
            </div>

            <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn solid">
                                {{ __('Login') }}
                            </button>


                        </div>
                    </div>


            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>

          </form>
          <form action="{{ route('register') }}" method="post" class="sign-up-form">
                @csrf

            <h2 class="title">Sign up</h2>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                   </div>

                   <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>

                <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn ">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>


            <p class="social-text">Or Sign up with social platforms</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome to</h3>
            <h4>Petromin Corporation</h4>
            <p>
                Petromin Corporation is a leading multi-national organization in the Kingdom of Saudi Arabia
                We stand as a strong transformative force,enabling the movement of people , products and services through
                sustainable and innovative mobility solution serving individuals and businesses alike -we help you move!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Welcome to</h3>
            <h4>Petromin Corporation</h4>
            <p>
                Petromin Corporation is a leading multi-national organization in the Kingdom of Saudi Arabia
                We stand as a strong transformative force,enabling the movement of people , products and services through
                sustainable and innovative mobility solution serving individuals and businesses alike -we help you move!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{URL::asset('js/app2.js')}}"></script>
  </body>
</html>
