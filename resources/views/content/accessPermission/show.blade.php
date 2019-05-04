@extends('front.layouts.front')
@section('title', 'Show Access Permission')
@section('cssAssets')
  <link href="{{ asset('assets/node_modules/icheck/skins/all.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/pages/form-icheck.css') }}" rel="stylesheet">
  @include('front.partials.css.cssSweetAlert')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">SHOW</h4>
      </div>
    </div>
  </div>
</div>
@endsection
@section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
  @include('front.partials.js.jsDataTables')
  <script src="{{ asset('assets/node_modules/icheck/icheck.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/icheck/icheck.init.js') }}"></script>
@endsection
