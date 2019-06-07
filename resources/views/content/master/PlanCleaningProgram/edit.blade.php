@extends('front.layouts.front')
@section('title', 'Plan Cleaning Program')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Plan Cleaning Program</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item">Plan Cleaning Program</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Tambah Plan Cleaning Program</h4>
          </div>
          <div class="card-body">
          {!! Form::model($data, ['route'=>['Plan-Cleaning-Program.update', $data->id], 'method'=>'PUT']) !!}
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Object') ? ' has-danger' : '' }}">
                    {!! Form::label('Object', 'Object', ['class'=>'control-label']) !!}
                    {!! Form::text('object', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('Object'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Object') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('material_made_from') ? ' has-danger' : '' }}">
                    {!! Form::label('Material Made From', 'Material Made From', ['class'=>'control-label']) !!}
                    {!! Form::text('material_made_from', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('material_made_from'))
                    <small class="form-control-feedback">
                      {{ $errors->first('material_made_from') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('how_to_do') ? ' has-danger' : '' }}">
                    {!! Form::label('How To Do', 'How To Do', ['class'=>'control-label']) !!}
                    {!! Form::text('how_to_do', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('how_to_do'))
                    <small class="form-control-feedback">
                      {{ $errors->first('how_to_do') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('Routine') ? ' has-danger' : '' }}">
                    {!! Form::label('Routine', 'Routine', ['class'=>'control-label']) !!}
                    {!! Form::text('routine', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                    @if ($errors->has('routine'))
                    <small class="form-control-feedback">
                      {{ $errors->first('routine') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('program_to_do') ? ' has-danger' : '' }}">
                    {!! Form::label('Program To Do', 'Program To Do', ['class'=>'control-label']) !!}
                    {!! Form::select('program_to_do', ['Weekly (Sun)'=>'Weekly (Sun)',
                                                      'Weekly (Mon)'=>'Weekly (Mon)',
                                                      'Weekly (Tue)'=>'Weekly (Tue)',
                                                      'Weekly (Wed)'=>'Weekly (Wed)',
                                                      'Weekly (Thu)'=>'Weekly (Thu)',
                                                      'Weekly (Fri)'=>'Weekly (Fri)',
                                                      'Weekly (Sat)'=>'Weekly (Sat)',
                                                      'Annual (1)'=>'Annual (1)',
                                                      'Annual (2)'=>'Annual (2)',
                                                      'Annual (3)'=>'Annual (3)',
                                                      'Annual (4)'=>'Annual (4)',
                                                      'Annual (5)'=>'Annual (5)',
                                                      'Annual (6)'=>'Annual (6)',
                                                      'Annual (7)'=>'Annual (7)',
                                                      'Annual (8)'=>'Annual (8)',
                                                      'Annual (9)'=>'Annual (9)',
                                                      'Annual (10)'=>'Annual (10)',
                                                      'Annual (11)'=>'Annual (11)',
                                                      'Annual (12)'=>'Annual (12)'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('routine'))
                    <small class="form-control-feedback">
                      {{ $errors->first('routine') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('ket') ? ' has-danger' : '' }}">
                    {!! Form::label('Ket', 'Ket', ['class'=>'control-label']) !!}
                    {!! Form::textarea('ket', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...', 'rows'=>3]);!!}
                    @if ($errors->has('Ket'))
                    <small class="form-control-feedback">
                      {{ $errors->first('Ket') }}
                    </small>
                    @endif
                  </div>
                </div>
              </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update</button>
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
