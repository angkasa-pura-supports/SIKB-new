@extends('front.layouts.front')
@section('title', 'Tambah Bandara')
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Bandara</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                          <li class="breadcrumb-item">Bandara</li>
                          <li class="breadcrumb-item active">Tambah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah Bandara</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'master-bandara.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('threeletter') ? ' has-danger' : '' }}">
                                            {!! Form::label('threeletter', 'ThreeLetter', ['class'=>'control-label']) !!}
                                            {!! Form::text('threeletter', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('threeletter'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('threeletter') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('nama_bandara') ? ' has-danger' : '' }}">
                                            {!! Form::label('nama_bandara', 'Nama Bandara', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_bandara', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('nama_bandara'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('nama_bandara') }}
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
