@extends('front.layouts.front')
@section('title', 'Tambah Karyawan')
@section('cssAssets')
@include('front.partials.css.cssForm')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Karyawan</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item">Karyawan</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Tambah Karyawan</h4>
          </div>
          <div class="card-body">
            {!! Form::open(['route'=>'master-karyawan.store']) !!}
            <div class="form-body">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Nik') ? ' has-danger' : '' }}">
                    {!! Form::label('Nik', 'Nik', ['class'=>'control-label']) !!}
                    {!! Form::text('Nik', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Nik'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Nik') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nama_karyawan') ? ' has-danger' : '' }}">
                    {!! Form::label('nama_karyawan', 'Name Karyawan', ['class'=>'control-label']) !!}
                    {!! Form::text('nama_karyawan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('nama_karyawan'))
                    <small class="form-control-feedback">
                      {{ $errors->first('nama_karyawan') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('jk') ? ' has-danger' : '' }}">
                    {!! Form::label('jk', 'Jenis Kelamin', ['class'=>'control-label']) !!}
                    {!! Form::select('jk', ['L'=>'Pria', 'P'=>'Wanita'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'--Pilih--']) !!}
                    @if ($errors->has('jk'))
                    <small class="form-control-feedback">
                      {{ $errors->first('jk') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Jabatan') ? ' has-danger' : '' }}">
                    {!! Form::label('Jabatan', 'Jabatan', ['class'=>'control-label']) !!}
                    {!! Form::select('Jabatan',[
                    'SuperAdmin' => 'SuperAdmin',
                    'Pimpinan' => 'Pimpinan',
                    'Supervisor' => 'Supervisor',
                    'Senior Leader' => 'Senior Leader',
                    'Team Leader' => 'Team Leader',
                    'Admin' => 'Admin',
                    'Cleaner' => 'Cleaner'
                    ], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'--Silahkan Pilih--' ]) !!}
                    @if ($errors->has('Jabatan'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Jabatan') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Unit_Kerja') ? ' has-danger' : '' }}">
                    {!! Form::label('Unit_Kerja', 'Unit Kerja', ['class'=>'control-label']) !!}
                    {!! Form::text('Unit_Kerja', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Unit_Kerja'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Unit_Kerja') }}
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
