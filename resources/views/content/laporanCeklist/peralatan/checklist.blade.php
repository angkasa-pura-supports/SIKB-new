@extends('front.layouts.front')
@section('title', 'Ceklist Peralatan')
@section('cssAssets')
  @include('front.partials.css.cssForm')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Ceklist Peralatan</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan Ceklist</a></li>
            <li class="breadcrumb-item">Ceklist Peralatan</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            {!! Form::model($idCeklist, ['route'=>['laporanCeklist-peralatan.checklistStore', $idCeklist->id], 'files'=>true]) !!}
              {{ csrf_field() }}
              <input type="hidden" name="ceklist_peralatan_id" value="{{ $idCeklist->id }}">
              @foreach ($kondisiPeralatan as $key)
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Item Pemeriksaan</label>
                      <input type="hidden" name="peralatan_kondisi_id[]" value="{{ $key->id }}">
                      <input type="text" value="{{ $key->item_pemeriksaan }}" class="form-control" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('kondisi[]') ? ' has-danger' : '' }}">
                      {!! Form::label('kondisi[]', 'Kondisi', ['class'=>'control-label']) !!}
                      {!! Form::select('kondisi[]', ['R'=>'Rusak', 'B'=>'Baik'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                      @if ($errors->has('kondisi[]'))
                        <small class="form-control-feedback">
                          {{ $errors->first('kondisi[]') }}
                        </small>
                      @endif
                    </div>
                  </div>
                </div>
              @endforeach
              {{-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nama_ceklist') ? ' has-danger' : '' }}">
                    {!! Form::label('nama_ceklist', 'Jenis Checklist', ['class'=>'control-label']) !!}
                    {!! Form::text('petugas', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('petugas'))
                      <small class="form-control-feedback">
                        {{ $errors->first('petugas') }}
                      </small>
                    @endif
                  </div>
                </div>
              </div> --}}
              <div class="table-responsive m-t-40">
                {!! Form::submit('Simpan', ['class'=>'btn waves-light btn-rounded btn-success']) !!}
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
