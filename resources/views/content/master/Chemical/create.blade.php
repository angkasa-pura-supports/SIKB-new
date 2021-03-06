@extends('front.layouts.front')
@section('title', 'Tambah Chemical')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Chemical</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item">Chemical</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Tambah Chemical</h4>
          </div>
          <div class="card-body">
            {!! Form::open(['route'=>'Chemical.store']) !!}
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Nama Chemical') ? ' has-danger' : '' }}">
                    {!! Form::label('Nama Chemical', 'Nama Chemical', ['class'=>'control-label']) !!}
                    {!! Form::text('nama_chemical', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Nama Chemical'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Nama Chemical') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('fungsi') ? ' has-danger' : '' }}">
                    {!! Form::label('fungsi', 'Fungsi',['class'=>'control-label']) !!}
                    {!! Form::textarea('fungsi', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('fungsi'))
                    <small class="form-control-feedback">
                      {{ $errors->first('fungsi') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('cara_penggunaan') ? ' has-danger' : '' }}">
                    {!! Form::label('Cara Penggunaan','Cara Penggunaan' ,['class'=>'control-label']) !!}
                    {!! Form::textarea('cara_penggunaan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('cara_penggunaan'))
                    <small class="form-control-feedback">
                      {{ $errors->first('cara_penggunaan') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Resiko') ? ' has-danger' : '' }}">
                    {!! Form::label('Resiko','Resiko', ['class'=>'control-label']) !!}
                    {!! Form::textarea('resiko', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('Resiko'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Resiko') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('penggendalian_resiko') ? ' has-danger' : '' }}">
                    {!! Form::label('penggendalian_resiko','Pengendalian Resiko',['class'=>'control-label']) !!}
                    {!! Form::textarea('penggendalian_resiko', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('penggendalian_resiko'))
                    <small class="form-control-feedback">
                      {{ $errors->first('penggendalian_resiko') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('ket') ? ' has-danger' : '' }}">
                    {!! Form::label('ket','ket (Opsional)',['class'=>'control-label']) !!}
                    {!! Form::textarea('ket', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('ket'))
                    <small class="form-control-feedback">
                      {{ $errors->first('ket') }}
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
