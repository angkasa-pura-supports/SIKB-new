@extends('front.layouts.front')
@section('title', 'Ubah Akses Role')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Akses Role</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Akses</a></li>
                          <li class="breadcrumb-item">Roles</li>
                          <li class="breadcrumb-item active">Ubah</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Ubah Akses Role</h4>
                      </div>
                      <div class="card-body">
                          {!! Form::model($data, ['route'=>['access-role.update',$data->model_id], 'method'=>'PUT']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('model_id') ? ' has-danger' : '' }}">
                                          {!! Form::label('model_id', 'Nama', ['class'=>'control-label']) !!}
                                          {!! Form::select('model_id', $userList, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'-- Pilih --']) !!}
                                          @if ($errors->has('model_id'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('model_id') }}
                                            </small>
                                          @endif
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group{{ $errors->has('role_id') ? ' has-danger' : '' }}">
                                        {!! Form::label('role_id', 'Role', ['class'=>'control-label']) !!}
                                        {!! Form::select('role_id', $listRole, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'-- Pilih --']) !!}
                                        @if ($errors->has('role_id'))
                                          <small class="form-control-feedback">
                                            {{ $errors->first('role_id') }}
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
@section('jsAssets')
  @include('front.partials.js.jsForm')
@endsection
