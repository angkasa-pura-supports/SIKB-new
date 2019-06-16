@extends('front.layouts.front')
@section('title', 'Tambah Consumable')
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Consumable</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                          <li class="breadcrumb-item">Consumable</li>
                          <li class="breadcrumb-item active">Tambah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah Consumable</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'Consumable.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('Nama Consumable') ? ' has-danger' : '' }}">
                                            {!! Form::label('Nama Consumable', 'Nama Consumable', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_consumable', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('Consumable'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('Consumable') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group{{ $errors->has('jenis') ? ' has-danger' : '' }}">
                                        {!! Form::label('jenis', 'jenis', ['class'=>'control-label']) !!}
                                        {!! Form::select('jenis', ['Consumable'=>'Consumable', 'Peralatan Facility Service'=>'Peralatan Facility Service'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                                        @if ($errors->has('jenis'))
                                          <small class="form-control-feedback">
                                            {{ $errors->first('jenis') }}
                                          </small>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('stok') ? ' has-danger' : '' }}">
                                            {!! Form::label('stok', 'Stok', ['class'=>'control-label']) !!}
                                            {!! Form::text('stok', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('stok'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('stok') }}
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
