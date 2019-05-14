@extends('front.layouts.front')
@section('title', 'Tambah Bandara')
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
                          {!! Form::model($karyawans, ['route'=>['master-karyawan.update', $karyawans->id], 'method'=>'PUT']) !!}
                              <div class="form-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('nik') ? ' has-danger' : '' }}">
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
                                          <div class="form-group{{ $errors->has('threeletter') ? ' has-danger' : '' }}">
                                            {!! Form::label('Nama Karyawan', 'Name Karyawn', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_karyawan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('Nama Karyawan'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('Nama Karyawan') }}
                                              </small>
                                            @endif
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('nama_bandara') ? ' has-danger' : '' }}">
                                            {!! Form::label('Jabatan', 'Jabatan', ['class'=>'control-label']) !!}
                                            {!! Form::select('Jabatan',array('SuperAdmin' => 'SuperAdmin', 'Pimpinan' => 'Pimpinan','Supervisor' => 'Supervisor', 'Senior Leader' => 'Senior Leader','Leader' => 'Team Leader','Admin' => 'Admin','Cleaner' => 'Cleaner' ), null, ['class'=>'form-control', 'placeholder'=>'--Silahkan Pilih--' ]) !!}
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
                                          <div class="form-group{{ $errors->has('Unit Kerja') ? ' has-danger' : '' }}">
                                            {!! Form::label('Unit Kerja', 'Unit Kerja', ['class'=>'control-label']) !!}
                                            {!! Form::text('Unit_Kerja', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                            @if ($errors->has('Unit Kerja'))
                                              <small class="form-control-feedback">
                                                {{ $errors->first('Unit Kerja') }}
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
