@extends('front.layouts.front')
@section('title', 'Ceklist SCA')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Ceklist SCA</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan Ceklist</a></li>
            <li class="breadcrumb-item">Ceklist SCA</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            {!! Form::open(['route'=>'laporanCeklist-sca.store']) !!}
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('bandara_id') ? ' has-danger' : '' }}">
                    {!! Form::label('bandara_id', 'Bandara', ['class'=>'control-label']) !!}
                    {!! Form::select('bandara_id', $bandara, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('bandara_id'))
                      <small class="form-control-feedback">
                        {{ $errors->first('bandara_id') }}
                      </small>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('area_id') ? ' has-danger' : '' }}">
                    {!! Form::label('area_id', 'Area', ['class'=>'control-label']) !!}
                    {!! Form::select('area_id', $areaList, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('area_id'))
                      <small class="form-control-feedback">
                        {{ $errors->first('area_id') }}
                      </small>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('pengawas_id') ? ' has-danger' : '' }}">
                    {!! Form::label('pengawas_id', 'Pengawas', ['class'=>'control-label']) !!}
                    {!! Form::select('pengawas_id', $pengawas, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('pengawas_id'))
                      <small class="form-control-feedback">
                        {{ $errors->first('pengawas_id') }}
                      </small>
                    @endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('petugas') ? ' has-danger' : '' }}">
                    {!! Form::label('petugas', 'Petugas', ['class'=>'control-label']) !!}
                    {!! Form::text('petugas', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('petugas'))
                      <small class="form-control-feedback">
                        {{ $errors->first('petugas') }}
                      </small>
                    @endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('shift') ? ' has-danger' : '' }}">
                    {!! Form::label('shift', 'Shift', ['class'=>'control-label']) !!}
                    {!! Form::select('shift', ['Shift 1'=>'Shift 1', 'Shift 2'=>'Shift 2', 'Shift 3'=>'Shift 3'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('shift'))
                      <small class="form-control-feedback">
                        {{ $errors->first('shift') }}
                      </small>
                    @endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('tanggal_input') ? ' has-danger' : '' }}">
                    {!! Form::label('tanggal_input', 'Tanggal Input', ['class'=>'control-label']) !!}
                    {!! Form::text('tanggal_input', null, ['class'=>'form-control', 'id'=>'mdate', 'placeholder'=>'yyyy-mm-dd']) !!}
                    @if ($errors->has('tanggal_input'))
                      <small class="form-control-feedback">
                        {{ $errors->first('tanggal_input') }}
                      </small>
                    @endif
                  </div>
                </div>

              </div>
              {!! Form::submit('Simpan', ['class'=>'btn waves-light btn-success']) !!}
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
