@extends('front.layouts.front')
@section('title', 'User Admin')
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">User Admin</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                          <li class="breadcrumb-item">User Admin</li>
                          <li class="breadcrumb-item active">Tambah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Tambah User Admin</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::open(['route'=>'UserAdmin.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group{{ $errors->has('Nik') ? ' has-danger' : '' }}">
                                            {!! Form::label('Nik', 'Nik', ['class'=>'control-label']) !!}
                                            {!! Form::select('Nik', ['1739326'=>'1739326'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}

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
                                          <div class="form-group{{ $errors->has('Nama Karyawan') ? ' has-danger' : '' }}">
                                            {!! Form::label('Nama Karyawan', 'Nama Karyawan', ['class'=>'control-label']) !!}
                                            {!! Form::text('nama_karyawan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'disabled'=>'disabled']) !!}
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
                                      <div class="form-group{{ $errors->has('Jabatan') ? ' has-danger' : '' }}">
                                        {!! Form::label('Jabatan', 'Jabatan', ['class'=>'control-label']) !!}
                                        {!! Form::text('Jabatan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'disabled'=>'disabled']) !!}
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
                                      <div class="form-group{{ $errors->has('Username') ? ' has-danger' : '' }}">
                                        {!! Form::label('Username', 'Username', ['class'=>'control-label']) !!}
                                        {!! Form::text('Username', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                        @if ($errors->has('Username'))
                                          <small class="form-control-feedback">
                                            {{ $errors->first('Username') }}
                                          </small>
                                        @endif
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group{{ $errors->has('Email') ? ' has-danger' : '' }}">
                                        {!! Form::label('Email', 'Email', ['class'=>'control-label']) !!}
                                        {!! Form::text('Email', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                        @if ($errors->has('Email'))
                                          <small class="form-control-feedback">
                                            {{ $errors->first('Email') }}
                                          </small>
                                        @endif
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        {!! Form::label('Password', 'Password', ['class'=>'control-label']) !!}
                                        {!! Form::password('Password', array('class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...')) !!}
                                        @if ($errors->has('Password'))
                                          <small class="form-control-feedback">
                                            {{ $errors->first('Password') }}
                                          </small>
                                        @endif
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group{{ $errors->has('Confim-password') ? ' has-danger' : '' }}">
                                        {!! Form::label('Confim-password', 'Confim-password', ['class'=>'control-label']) !!}
                                        {!! Form::password('Confim-password', array('class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...')) !!}
                                        @if ($errors->has('Confim-password'))
                                          <small class="form-control-feedback">
                                            {{ $errors->first('Confim-password') }}
                                          </small>
                                        @endif
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
  </div>
@endsection
