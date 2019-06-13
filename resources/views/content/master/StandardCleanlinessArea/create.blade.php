@extends('front.layouts.front')
@section('title', 'Tambah Kondisi Peralatan')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Kondisi Peralatan</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">Master</li>
                      <li class="breadcrumb-item">Kondisi Peralatan</li>
                      <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah Kondisi Peralatan</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'Standard-Cleanliness-Area.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Nama Area') ? ' has-danger' : '' }}">
                                          {!! Form::label('Area SCA', 'Nama Area', ['class'=>'control-label']) !!}
                                          {!! Form::select('area_id', $standardSCA, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'-- Pilih --']) !!}
                                          @if ($errors->has('area_id'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('area_id') }}
                                            </small>
                                          @endif
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Material') ? ' has-danger' : '' }}">
                                          {!! Form::label('Material', 'Material', ['class'=>'control-label']) !!}
                                          {!! Form::text('material', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                          @if ($errors->has('Material'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('Material') }}
                                            </small>
                                          @endif
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Standard Area') ? ' has-danger' : '' }}">
                                          {!! Form::label('Standard Area', 'Standard Area', ['class'=>'control-label']) !!}
                                          {!! Form::textarea('standard_area', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]) !!}
                                          @if ($errors->has('Standard Area'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('Standard Area') }}
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
