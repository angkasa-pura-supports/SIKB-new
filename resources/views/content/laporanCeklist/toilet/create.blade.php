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
        <h4 class="text-themecolor">Ceklist Toilet</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan Ceklist</a></li>
            <li class="breadcrumb-item">Ceklist Toilet</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            {!! Form::open(['route'=>'laporanCeklist-toilet.store', 'files'=>true]) !!}
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
                  <div class="form-group{{ $errors->has('lokasi_toilet_id') ? ' has-danger' : '' }}">
                    {!! Form::label('lokasi_toilet_id', 'Lokasi Toilet', ['class'=>'control-label']) !!}
                    {!! Form::select('lokasi_toilet_id', $lokasiToilet, null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                    @if ($errors->has('lokasi_toilet_id'))
                      <small class="form-control-feedback">
                        {{ $errors->first('lokasi_toilet_id') }}
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
              <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Checklist</th>
                      <th>Upload</th>
                      <th>Pria</th>
                      <th>Wanita</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        {!! Form::hidden('ceklist1', 'Keharuman') !!}
                        Keharuman
                      </td>
                      <td>
                        {!! Form::hidden('upload1', 'Toilet Wangi') !!}
                        {{-- {!! Form::file('upload1', ['class'=>'form-control']) !!} --}}
                        Toilet Wangi
                      </td>
                      <td>
                          <input type="radio" name="pria1" value="Wangi" >Wangi<br>
                        <input type="radio" name="pria1" value="Tidak" >Tidak
                      </td>
                      <td>
                        <input type="radio" name="wanita1" value="Wangi" >Wangi<br>
                        <input type="radio" name="wanita1" value="Tidak" >Tidak
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>
                        {!! Form::hidden('ceklist2', 'Lantai') !!}
                        Lantai
                      </td>
                      <td>
                        {!! Form::file('upload2', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria2" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria2" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita2" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita2" value="Bersih" >Bersih
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>
                        {!! Form::hidden('ceklist3', 'Toilet Bowl') !!}
                        Toilet Bowl
                      </td>
                      <td>
                        {!! Form::file('upload3', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria3" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria3" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita3" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita3" value="Bersih" >Bersih
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>
                        {!! Form::hidden('ceklist4', 'Dinding') !!}
                        Dinding
                      </td>
                      <td>
                        {!! Form::file('upload4', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria4" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria4" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita4" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita4" value="Bersih" >Bersih
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>
                        {!! Form::hidden('ceklist5', 'Tempat Sampah') !!}
                        Tempat Sampah
                      </td>
                      <td>
                        {!! Form::file('upload5', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria5" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria5" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita5" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita5" value="Bersih" >Bersih
                      </td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td>
                        {!! Form::hidden('ceklist6', 'Cermin') !!}
                        Cermin
                      </td>
                      <td>
                        {!! Form::file('upload6', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria6" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria6" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita6" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita6" value="Bersih" >Bersih
                      </td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td>
                        {!! Form::hidden('ceklist7', 'Washbasin') !!}
                        Washbasin
                      </td>
                      <td>
                        {!! Form::file('upload7', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria7" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria7" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita7" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita7" value="Bersih" >Bersih
                      </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>
                        {!! Form::hidden('ceklist8', 'Sabun Cuci Tangan') !!}
                        Sabun Cuci Tangan
                      </td>
                      <td>
                        {!! Form::file('upload8', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria8" value="Ada" >Ada<br>
                        <input type="radio" name="pria8" value="Tidak" >Tidak
                      </td>
                      <td>
                        <input type="radio" name="wanita8" value="Ada" >Ada<br>
                        <input type="radio" name="wanita8" value="Tidak" >Tidak
                      </td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>
                        {!! Form::hidden('ceklist9', 'Kloset') !!}
                        Kloset
                      </td>
                      <td>
                        {!! Form::file('upload9', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria9" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria9" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita9" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita9" value="Bersih" >Bersih
                      </td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>
                        {!! Form::hidden('ceklist10', 'Tissue Roll') !!}
                        Tissue Roll
                      </td>
                      <td>
                        {!! Form::file('upload10', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria10" value="Ada" >Ada<br>
                        <input type="radio" name="pria10" value="Tidak" >Tidak
                      </td>
                      <td>
                        <input type="radio" name="wanita10" value="Ada" >Ada<br>
                        <input type="radio" name="wanita10" value="Tidak" >Tidak
                      </td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>
                        {!! Form::hidden('ceklist11', 'Urinal') !!}
                        Urinal
                      </td>
                      <td>
                        {!! Form::file('upload11', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria11" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria11" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita11" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita11" value="Bersih" >Bersih
                      </td>
                    </tr>

                    <tr>
                      <td>12</td>
                      <td>
                        {!! Form::hidden('ceklist12', 'Handdryer') !!}
                        Handdryer
                      </td>
                      <td>
                        {!! Form::file('upload12', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria12" value="Ada" >Ada<br>
                        <input type="radio" name="pria12" value="Tidak" >Tidak
                      </td>
                      <td>
                        <input type="radio" name="wanita12" value="Ada" >Ada<br>
                        <input type="radio" name="wanita12" value="Tidak" >Tidak
                      </td>
                    </tr>

                    <tr>
                      <td>13</td>
                      <td>
                        {!! Form::hidden('ceklist13', 'Pintu') !!}
                        Pintu
                      </td>
                      <td>
                        {!! Form::file('upload13', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria13" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria13" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita13" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita13" value="Bersih" >Bersih
                      </td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>
                        {!! Form::hidden('ceklist14', 'Janitor') !!}
                        Janitor
                      </td>
                      <td>
                        {!! Form::file('upload14', ['class'=>'form-control']) !!}
                      </td>
                      <td>
                        <input type="radio" name="pria14" value="Kotor" >Kotor<br>
                        <input type="radio" name="pria14" value="Bersih" >Bersih
                      </td>
                      <td>
                        <input type="radio" name="wanita14" value="Kotor" >Kotor<br>
                        <input type="radio" name="wanita14" value="Bersih" >Bersih
                      </td>
                    </tr>

                  </tbody>

                </table>
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
