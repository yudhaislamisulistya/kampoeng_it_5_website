<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/assets/images/favicon.png')}}">
    <title>Daftar - Kampoeng IT 5 2020</title>
    <link href="{{asset('public/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(public/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(public/assets/images/img31.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <img src="{{asset('public/assets/images/logo-icon.png')}}" alt="wrapkit">
                        <h2 class="mt-3 text-center">Gabung Kompetisi</h2>
                        <form class="mt-4" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" placeholder="Masukkan Nama Anda" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Masukkan Email Anda" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required placeholder="Masukkan Password Anda" autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <input id="password-confirm" placeholder="Masukkan Konfirmasi Password" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="{{route('login')}}" class="text-danger">Sign In</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script>
        $(".preloader ").fadeOut();

    </script>
</body>

</html>
