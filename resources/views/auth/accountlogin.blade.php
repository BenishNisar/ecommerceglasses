<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Mono Admin</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('Dashboardasset/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('Dashboardasset/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('Dashboardasset/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  <link href="{{ asset('Dashboardasset/css/style.css') }}" rel="stylesheet" id="main-css-href" />
  <link href="{{ asset('Dashboardasset/images/favicon.png') }}" rel="shortcut icon" />
  <script src="{{ asset('Dashboardasset/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="bg-light-gray" id="body">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="d-flex flex-column justify-content-between">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card card-default mb-0">
            <div class="card-header pb-0">
              <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                <a class="w-auto pl-0" href="#">
                  <img src="{{ asset('assets/img/logo.png') }}" alt="Mono Logo">
                  {{-- <span class="brand-name text-dark">MONO</span> --}}
                </a>
              </div>
            </div>
            <div class="card-body px-5 pb-5 pt-0">
              <h4 class="text-dark mb-6 text-center">Sign in for free</h4>

              <form method="POST" action="{{ route('auth.accountlogin.store') }}">
                @csrf

                <div class="row">
                  <!-- Email -->
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email" required>
                    @error('email')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                  <!-- Password -->
                  <div class="form-group col-md-12">
                    <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
                    @error('password')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="remember">
                        <label class="custom-control-label" for="customCheck2">Remember me</label>
                      </div>
                      {{-- <a class="text-color" href="#">Forgot password?</a> --}}
                    </div>

                    <button type="submit" class="btn btn-primary btn-pill mb-4 w-100">Sign In</button>

                    {{-- Flash error --}}
                    @if ($errors->has('error'))
                      <p class="text-danger text-center">{{ $errors->first('error') }}</p>
                    @endif

                    <p class="text-center">Don't have an account yet? <a class="text-blue" href="#">Sign Up</a></p>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
