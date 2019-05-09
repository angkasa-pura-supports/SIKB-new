@extends('front.layouts.front')
@section('title', 'User Admin')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">User Admin</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">User Setting</a></li>
                          <li class="breadcrumb-item">User Admin</li>
                          <li class="breadcrumb-item active">Tambah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah User Admin</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'UserAdmin.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('Nik') ? ' has-danger' : '' }}">
                                            {!! Form::label('Nik', 'Nik', ['class'=>'control-label']) !!}
                                            {!! Form::select('Nik', $karyawanList, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}

                                            @if ($errors->has('Nik'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('Nik') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-actions">
                                  <button type="submit" class="btn btn-success">Tambah</button>
                              </div>
                          {!! Form::close() !!}
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
@endsection
@section('jsAssets')
  @include('front.partials.js.jsForm')
@endsection
