@extends('front.layouts.front')
@section('title', 'Create Access Permission')
@section('cssAssets')
  <link href="{{ asset('assets/node_modules/icheck/skins/all.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/pages/form-icheck.css') }}" rel="stylesheet">
  @include('front.partials.css.cssSweetAlert')
  @include('front.partials.css.cssForm')
  <style media="screen">
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background-color: #03a9f3;
      border: 1px solid #03a9f3;

    }
  </style>
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Access Permission</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Access Permission</li>
            <li class="breadcrumb-item active">Create Access Permission</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h6 class="card-subtitle"></h6>
                <div class="skin skin-square">
                  {!! Form::open(['route'=>'access-permission.store']) !!}
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                          {!! Form::label('user_id', 'Name', ['class'=>'control-label']) !!}
                          {!! Form::select('user_id', $userList, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'-- Pilih --']) !!}
                          @if ($errors->has('user_id'))
                            <small class="form-control-feedback">
                              {{ $errors->first('user_id') }}
                            </small>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 nopadding">
                        <div class="form-group{{ $errors->has('permission') ? ' has-error' : '' }}">
                          {!! Form::label('permission', 'Permission', ['class'=>'control-label']) !!}
                          <div class="input-group">
                            <select class="select2 m-b-10 select2-multiple" name="permission[]" multiple data-placeholder="-- Select Permission --" style="width:100%">
                              @foreach ($listPermission as $key)
                                <option value="{{ $key->id }}">{{ $key->name }}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('permission'))
                              <small class="form-control-feedback">
                                {{ $errors->first('permission') }}
                              </small>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
                    </div>

                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection @section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
  @include('front.partials.js.jsDataTables')
  <script src="{{ asset('assets/node_modules/icheck/icheck.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/icheck/icheck.init.js') }}"></script>
  @include('front.partials.js.jsForm')
@endsection
