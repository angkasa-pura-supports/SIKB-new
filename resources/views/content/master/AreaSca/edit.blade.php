@extends('front.layouts.front')
@section('title', 'Standard Cleanliness Area')
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Area Standard Cleanliness Area</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                          <li class="breadcrumb-item">Area Standard Cleanliness Area</li>
                          <li class="breadcrumb-item active">Ubah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah Area Standard Cleanliness Area</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::model($data, ['route'=>['Area-Sca.update', $data->id], 'method'=>'PUT']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('Nama Areas') ? ' has-danger' : '' }}">
                                            {!! Form::label('Nama Area', 'Nama Area', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_area', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('Nama Area'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('Nama Area') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-actions">
                                  <button type="submit" class="btn btn-success">Ubah</button>
                              </div>
                          {!! Form::close() !!}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
