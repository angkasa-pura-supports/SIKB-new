<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>SIKB | 403</title>
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/pages/error-pages.css') }}" rel="stylesheet">
</head>
<body class="skin-blue fixed-layout">
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>403</h1>
                <h3 class="text-uppercase">Forbiddon Error!</h3>
                <p class="text-muted m-t-30 m-b-30">YOU DON'T HAVE PERMISSION TO ACCESS ON THIS SERVER.</p>
                {{-- <a href="index-2.html" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div> --}}
        </div>
    </section>
    <script src="{{ asset('assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/waves.js') }}"></script>
</html>
