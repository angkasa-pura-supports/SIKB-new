<!DOCTYPE html>
<html lang="en">
@include('front.partials.css')
<body class="skin-blue fixed-layout">
    @include('front.partials.loader')
    <div id="main-wrapper">
        @include('front.partials.header')
        @include('front.partials.leftbar')
        @yield('content')
        @include('front.partials.footer')
    </div>
    @include('front.partials.js')
</html>
