@extends('front.layouts.front')
@section('title', 'Kontrak Pekerjaan')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Kontrak Pekerjaan</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                          <li class="breadcrumb-item">Kontrak Pekerjaan</li>
                          <li class="breadcrumb-item active">Tambah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah Kontrak</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'KontrakPekerjaan.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('Bandara') ? ' has-danger' : '' }}">
                                            {!! Form::label('Bandara', 'Bandara', ['class'=>'control-label']) !!}
                                            {!! Form::select('Bandara', $bandara, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                                            @if ($errors->has('Bandara'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('Bandara') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('no_kontrak') ? ' has-danger' : '' }}">
                                            {!! Form::label('no_kontrak', 'No Kontrak', ['class'=>'control-label']) !!}
                                            {!! Form::text('no_kontrak', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('no_kontrak'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('no_kontrak') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('nama_pekerjaan') ? ' has-danger' : '' }}">
                                            {!! Form::label('nama_pekerjaan', 'Nama Pekerjaan', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_pekerjaan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('nama_pekerjaan'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('nama_pekerjaan') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('masa_berlaku') ? ' has-danger' : '' }}">
                                            {!! Form::label('masa_berlaku', 'Masa Berlaku', ['class'=>'control-label']) !!}
                                            {!! Form::text('masa_berlaku', null, ['class'=>'form-control', 'id'=>'mdate', 'placeholder'=>'yyyy-mm-dd']) !!}
                                            @if ($errors->has('masa_berlaku'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('masa_berlaku') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('jenis_kontrak') ? ' has-danger' : '' }}">
                                            {!! Form::label('jenis_kontrak', 'Jenis Kontrak', ['class'=>'control-label']) !!}
                                            {!! Form::text('jenis_kontrak', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('jenis_kontrak'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('jenis_kontrak') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('pelaksana') ? ' has-danger' : '' }}">
                                            {!! Form::label('pelaksana', 'Pelaksana', ['class'=>'control-label']) !!}
                                            {!! Form::text('pelaksana', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('pelaksana'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('pelaksana') }}
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
@section('jsAssets')
  @include('front.partials.js.jsForm')
@endsection
