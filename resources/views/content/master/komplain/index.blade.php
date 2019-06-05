@extends('front.layouts.front')
@section('title', 'Access Role')
@section('cssAssets')
  @include('front.partials.css.cssSweetAlert')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Access Role</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Akses</li>
            <li class="breadcrumb-item active">Role</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="form-actions">
              <a href="{{ route('komplain.create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Data</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive m-t-40">
              <table id="example23" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
  @include('front.partials.js.jsDataTables')
@endsection
