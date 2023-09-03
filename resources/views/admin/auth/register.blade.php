<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('backend/assets/img/favicon.png')}}">
  <title>
    Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('backend/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('backend/assets/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="row justify-content-center py-4" >
                    <!-- Logo staviti -->
                    <img src="{{ asset('backend/assets/img/apple-icon.png')}}" style="width: 60px;"></a>
                  </div>
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                    @csrf
                <!-- Name -->
                <div class="input-group input-group-outline my-3">
                    <input id="name" type="text" name="name" :value="{{ old('name') }}" class="form-control" 
                    placeholder="Name" autofocus autocomplete="username">
                </div>
                <!-- Lastname -->
                <div class="input-group input-group-outline my-3">
                    <input id="lastname" type="text" name="lastname" :value="{{ old('lastname') }}" class="form-control" 
                    placeholder="Lastname" autofocus autocomplete="username">
                </div>
                <!-- Email -->
                <div class="input-group input-group-outline my-3">
                    <input id="email" type="email" name="email" :value="{{ old('email') }}" class="form-control" 
                    placeholder="Email" autofocus autocomplete="username">
                    @if($errors->has('email'))
                        <code>{{$errors->first('email')}}</code>
                    @endif
                </div>
                <!-- Password -->
                <div class="input-group input-group-outline mb-3">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                    @if($errors->has('password'))
                        <code>{{$errors->first('password')}}</code>
                    @endif
                </div>
                <!-- Remember me -->
                <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember_me" checked>
                    <label class="form-check-label mb-0 ms-3" for="remember_me">Remember me</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="{{asset('backend/pages/sign-up.html')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                  <div class="mt-4">
                    @if($errors->has('email'))
                        <code>{{$errors->first('email')}}</code>
                    @endif
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        @include('admin.layouts.footer')
      </footer>
    </div>
  </main>
</body>

</html>