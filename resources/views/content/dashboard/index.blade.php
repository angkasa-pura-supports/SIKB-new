@extends('front.layouts.front')
@section('title', 'Dashboard')
@section('cssAssets')
  <link href="{{ asset('assets/node_modules/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/pages/easy-pie-chart.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/pages/dashboard2.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/pages/icon-page.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Dashboard 2</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard 2</li>
                      </ol>
                      <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                  </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Info box -->
          <!-- ============================================================== -->
          <div class="row">
              <!-- Column -->
              <div class="col-lg-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Site A Traffic</h5>
                          <div class="stats-row m-t-20 m-b-20">
                              <div class="stat-item">
                                  <h6>Growth</h6> <b>80.40%</b></div>
                              <div class="stat-item">
                                  <h6>Montly</h6> <b>20.40%</b></div>
                              <div class="stat-item">
                                  <h6>Daily</h6> <b>5.40%</b></div>
                          </div>
                      </div>
                      <div id="sparkline8" class="sparkchart"></div>
                  </div>
              </div>
              <!-- Column -->
              <!-- Column -->
              <div class="col-lg-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Site B Traffic</h5>
                          <div class="stats-row m-t-20 m-b-20">
                              <div class="stat-item">
                                  <h6>Growth</h6> <b>80.40%</b></div>
                              <div class="stat-item">
                                  <h6>Montly</h6> <b>20.40%</b></div>
                              <div class="stat-item">
                                  <h6>Daily</h6> <b>5.40%</b></div>
                          </div>
                      </div>
                      <div id="sparkline9" class="sparkchart"></div>
                  </div>
              </div>
              <!-- Column -->
              <!-- Column -->
              <div class="col-lg-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Site C Traffic</h5>
                          <div class="stats-row m-t-20 m-b-20">
                              <div class="stat-item">
                                  <h6>Growth</h6> <b>80.40%</b></div>
                              <div class="stat-item">
                                  <h6>Montly</h6> <b>20.40%</b></div>
                              <div class="stat-item">
                                  <h6>Daily</h6> <b>5.40%</b></div>
                          </div>
                      </div>
                      <div id="sparkline10" class="sparkchart"></div>
                  </div>
              </div>
              <!-- Column -->
          </div>
        
      </div>
  </div>
@endsection
@section('jsAssets')
  <script src="{{ asset('assets/node_modules/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/jquery.easy-pie-chart/easy-pie-chart.init.js') }}"></script>
  <script src="{{ asset('assets/node_modules/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('dist/js/dashboard2.js') }}"></script>
@endsection
