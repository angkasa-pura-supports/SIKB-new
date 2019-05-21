@extends('front.layouts.front')
@section('title', 'Report Toilet')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h4 class="text-themecolor">Report Ceklist Toilet</h4>
              </div>
              <div class="col-md-7 align-self-center text-right">
                  <div class="d-flex justify-content-end align-items-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Report</a></li>
                          <li class="breadcrumb-item active">Toilet</li>
                      </ol>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white">Report Ceklist Toilet</h4>
                      </div>
                      <div class="card-body">
                        {!! Form::open(['route'=>'report-toilet.store', 'method'=>'GET']) !!}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('masa_berlaku') ? ' has-danger' : '' }}">
                                          {!! Form::label('Dari', 'Dari', ['class'=>'control-label']) !!}
                                          {!! Form::text('start', null, ['class'=>'form-control', 'id'=>'mdate', 'placeholder'=>'yyyy-mm-dd', 'required'=>'']) !!}
                                          @if ($errors->has('masa_berlaku'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('masa_berlaku') }}
                                            </small>
                                          @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('masa_berlaku') ? ' has-danger' : '' }}">
                                          {!! Form::label('Dari', 'Dari', ['class'=>'control-label']) !!}
                                          {!! Form::text('start', null, ['class'=>'form-control', 'id'=>'mdate', 'placeholder'=>'yyyy-mm-dd', 'required'=>'']) !!}
                                          @if ($errors->has('masa_berlaku'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('masa_berlaku') }}
                                            </small>
                                          @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('masa_berlaku') ? ' has-danger' : '' }}">
                                          {!! Form::label('Sampai', 'Sampai', ['class'=>'control-label']) !!}
                                          {!! Form::text('end', null, ['class'=>'form-control', 'id'=>'mdate1', 'placeholder'=>'yyyy-mm-dd', 'required'=>'']) !!}
                                          @if ($errors->has('masa_berlaku'))
                                            <small class="form-control-feedback">
                                              {{ $errors->first('masa_berlaku') }}
                                            </small>
                                          @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Report</button>
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
  @include('front.partials.js.jsDataTables')
@endsection
