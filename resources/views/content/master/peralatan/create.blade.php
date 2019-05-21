@extends('front.layouts.front')
@section('title', 'Tambah Peralatan')
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Peralatan</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                          <li class="breadcrumb-item">Peralatan</li>
                          <li class="breadcrumb-item active">Tambah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah Peralatan</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'master-peralatan.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('nama_peralatan') ? ' has-danger' : '' }}">
                                            {!! Form::label('nama_peralatan', 'Nama Peralatan', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_peralatan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('nama_peralatan'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('nama_peralatan') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('nama_mesin') ? ' has-danger' : '' }}">
                                            {!! Form::label('nama_mesin', 'Nama Mesin', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_mesin', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('nama_mesin'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('nama_mesin') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                            {!! Form::label('type', 'Type', ['class'=>'control-label']) !!}
                                            {!! Form::text('type', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('type'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('type') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('no_mesin') ? ' has-danger' : '' }}">
                                            {!! Form::label('no_mesin', 'Nomor Mesin', ['class'=>'control-label']) !!}
                                            {!! Form::text('no_mesin', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('no_mesin'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('no_mesin') }}
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
@endsection
