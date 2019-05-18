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
                          {!! Form::open(['route'=>'master-kondisi-peralatan.store']) !!}
                              <div class="form-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('peralatan_id') ? ' has-danger' : '' }}">
                                          {!! Form::label('peralatan_id', 'Nama Peralatan', ['class'=>'control-label']) !!}
                                          {!! Form::select('peralatan_id', $peralatanList, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'-- Pilih --']) !!}
                                          @if ($errors->has('peralatan_id'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('peralatan_id') }}
                                            </small>
                                          @endif
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('item_pemeriksaan') ? ' has-danger' : '' }}">
                                          {!! Form::label('item_pemeriksaan', 'Item Pemeriksaan', ['class'=>'control-label']) !!}
                                          {!! Form::text('item_pemeriksaan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                          @if ($errors->has('item_pemeriksaan'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('item_pemeriksaan') }}
                                            </small>
                                          @endif
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('kondisi_standard') ? ' has-danger' : '' }}">
                                          {!! Form::label('kondisi_standard', 'Kondisi Standard', ['class'=>'control-label']) !!}
                                          {!! Form::text('kondisi_standard', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                                          @if ($errors->has('kondisi_standard'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('kondisi_standard') }}
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
