@extends('front.layouts.front')
@section('title', 'Permintaan Alat Perlindungan Diri')
@section('content')
@section('cssAssets')
@include('front.partials.css.cssForm')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Permintaan Alat Perlindungan Diri</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item">Permintaan Alat Perlindungan Diri</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Form Permintaan Alat Perlindungan Diri</h4>
          </div>
          <div class="card-body">
            {!! Form::open(['route'=>'request-adp.store']) !!}
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('tanggal_input') ? ' has-danger' : '' }}">
                    {!! Form::label('tanggal_input', 'Tanggak Permintaan', ['class'=>'control-label']) !!}
                    {!! Form::text('tanggal_input', null, ['class'=>'form-control', 'id'=>'mdate', 'placeholder'=>'yyyy-mm-dd']) !!}
                    @if ($errors->has('tanggal_input'))
                    <small class="form-control-feedback">
                      {{ $errors->first('tanggal_input') }}
                    </small>
                    @endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nama_pemohon') ? ' has-danger' : '' }}">
                    {!! Form::label('nama_pemohon', 'Nama Pemohon', ['class'=>'control-label']) !!}
                    {!! Form::text('nama_pemohon', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('nama_pemohon'))
                    <small class="form-control-feedback">
                      {{ $errors->first('nama_pemohon') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nik') ? ' has-danger' : '' }}">
                    {!! Form::label('nik', 'N I K', ['class'=>'control-label']) !!}
                    {!! Form::text('nik', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('nik'))
                    <small class="form-control-feedback">
                      {{ $errors->first('nik') }}
                    </small>
                    @endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Jumlah') ? ' has-danger' : '' }}">
                    {!! Form::label('Jumlah', 'Jumlah', ['class'=>'control-label']) !!}
                    {!! Form::text('jumlah', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Jumlah'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Jumlah') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group{{ $errors->has('shift') ? ' has-danger' : '' }}">
                    {!! Form::label('shift', 'Jenis APD', ['class'=>'control-label']) !!}
                    {!! Form::select('shift', ['Shift 1'=>'Shift 1', 'Shift 2'=>'Shift 2', 'Shift 3'=>'Shift 3'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('shift'))
                      <small class="form-control-feedback">
                        {{ $errors->first('shift') }}
                      </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group{{ $errors->has('catatan') ? ' has-danger' : '' }}">
                    {!! Form::label('catatan', 'Catatan (opsional)', ['class'=>'control-label']) !!}
                    {!! Form::textarea('catatan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('catatan'))
                    <small class="form-control-feedback">
                      {{ $errors->first('catatan') }}
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
