@extends('front.layouts.front')
@section('title', 'Lokasi Toilet')
@section('cssAssets')
  @include('front.partials.css.cssSweetAlert')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Lokasi Toilet</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item">Lokasi Toilet</li>
            <li class="breadcrumb-item active">Ubah</li>
          </ol>

        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Ubah Lokasi Toilet</h4>
                </div>
                <div class="card-body">
                    {!! Form::model($data, ['route'=>['master-lokasiToilet.update', $data->id], 'method'=>'PUT']) !!}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('Lokasi Toilet') ? ' has-danger' : '' }}">
                                      {!! Form::label('Lokasi Toilet', 'Lokasi Toilet', ['class'=>'control-label']) !!}
                                      {!! Form::text('lokasi_toilet', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                      @if ($errors->has('Lokasi Toilet'))
                                        <small class="form-control-feedback">
                                          {{ $errors->first('Lokasi Toilet') }}
                                        </small>
                                      @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('Nama Toilet') ? ' has-danger' : '' }}">
                                      {!! Form::label('Nama Toilet', 'Nama Toilet', ['class'=>'control-label']) !!}
                                      {!! Form::text('nama_toilet', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                      @if ($errors->has('Nama Toilet'))
                                        <small class="form-control-feedback">
                                          {{ $errors->first('Nama Toilet') }}
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
</div>
</div>
</div>
@endsection
@section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
  @include('front.partials.js.jsDataTables')
@endsection
