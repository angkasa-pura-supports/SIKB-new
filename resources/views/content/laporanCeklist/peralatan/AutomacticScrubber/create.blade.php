@extends('front.layouts.front')
@section('title', 'Ceklist Toilet')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Automactic Scrubber</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan Ceklist</a></li>
            <li class="breadcrumb-item">Automactic Scrubber</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            {!! Form::open(['route'=>'laporanCeklist-AutomacticScrubber.store', 'files'=>true]) !!}
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('bandara_id') ? ' has-danger' : '' }}">
                    {!! Form::label('bandara_id', 'Bandara', ['class'=>'control-label']) !!}
                    {!! Form::select('bandara_id', $bandara1, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('bandara_id'))
                      <small class="form-control-feedback">
                        {{ $errors->first('bandara_id') }}
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
