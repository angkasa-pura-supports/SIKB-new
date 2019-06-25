@extends('front.layouts.front')
@section('title', 'Tambah Bandara')
@section('cssAssets')
@include('front.partials.css.cssForm')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Bandara</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item">Bandara</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Tambah Bandara</h4>
          </div>
          <div class="card-body">
            {!! Form::open(['route'=>'master-bandara.store']) !!}
            <div class="form-body">
              <div class="row">
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
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('threeletter') ? ' has-danger' : '' }}">
                    {!! Form::label('nama konsumable goods', 'Nama Consumable Goods', ['class'=>'control-label']) !!}
                    {!! Form::text('nama_consumable', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('nama konsumable goods'))
                    <small class="form-control-feedback">
                      {{ $errors->first('nama konsumable goods') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('pengguna') ? ' has-danger' : '' }}">
                    {!! Form::label('pengguna', 'Pengguna', ['class'=>'control-label']) !!}
                    {!! Form::text('pengguna', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('tanggal_input'))
                    <small class="form-control-feedback">
                      {{ $errors->first('tanggal_input') }}
                    </small>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Shift') ? ' has-danger' : '' }}">
                    {!! Form::label('Shift', 'Shift', ['class'=>'control-label']) !!}
                    {!! Form::text('shift', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Shift'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Shift') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Qty') ? ' has-danger' : '' }}">
                    {!! Form::label('Qty', 'Qty', ['class'=>'control-label']) !!}
                    {!! Form::text('qty', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Qty'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Qty') }}
                    </small>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Petugas') ? ' has-danger' : '' }}">
                    {!! Form::label('Petugas', 'Petugas', ['class'=>'control-label']) !!}
                    {!! Form::text('petugas', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Petugas'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Petugas') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Team Leader') ? ' has-danger' : '' }}">
                    {!! Form::label('Team Leader', 'Team Leader', ['class'=>'control-label']) !!}
                    {!! Form::text('team_leader', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Team Leader'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Team Leader') }}
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
