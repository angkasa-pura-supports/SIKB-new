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
            {!! Form::model($idCeklist, ['route'=>['laporanCeklist-sca.checklistStore', $idCeklist->id], 'files'=>true]) !!}
              {{ csrf_field() }}
              <div class="row">
                <input type="hidden" name="ceklist_sca_id" value="{{ $idCeklist->id }}">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nama_ceklist') ? ' has-danger' : '' }}">
                    {!! Form::label('nama_ceklist', 'Jenis Material', ['class'=>'control-label']) !!}
                    <select class="select2 form-control custom-select" name="sca_id" id="pilihValue" placeholder="Masukkan sesuatu...">
                      <option selected disabled>--Pilih--</option>
                      @php
                        $sudahDipilih = App\UploadCeklistSca::where('ceklist_sca_id', $idCeklist->id)->get();
                        $listUpload = [];
                        foreach ($sudahDipilih as $pilih) {
                          $listUpload[]=$pilih->sca_id;
                        }
                        $material = App\StandardCleanlinessArea::where('area_id', $idCeklist->area_id)->get();
                        $isiMaterial = [];
                        foreach ($material as $value) {
                          $isiMaterial[]=$value->id;
                        }
                      @endphp
                      @foreach ($material as $value)
                        @if (in_array($value->id, $listUpload))
                        @else
                          <option value="{{ $value->id }}">{{ $value->material }}</option>
                        @endif
                      @endforeach
                    </select>
                    @if ($errors->has('sca_id'))
                      <small class="form-control-feedback">
                        {{ $errors->first('sca_id') }}
                      </small>
                    @endif
                  </div>
                </div>
              </div>

              <div id="pilihan">

              </div>
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
  <script type="text/javascript">
    $(document).ready(function(){
     $("#pilihValue").change(function(){
      // alert("Selected value is : " + document.getElementById("pilihValue").value);
      var pilih = document.getElementById("pilihValue").value;
      document.getElementById("pilihan").innerHTML="<div class='row'>"+
      "<div class='col-md-6'>"+
      "<label class='control-label'>Kode</label>"+
      "<select class='select2 form-control custom-select' name='kode'>"+
      "<option selected disabled>--Pilih--</option>"+
      "<option value='1'>Bersih</option>"+
      "<option value='0'>Kotor</option>"+
      "</select></div>"+
      "<div class='col-md-6'>"+
      "<label class='control-label'>Penjelasan</label>"+
      "<input type='text' class='form-control' name='penjelasan'/>"+
      "</div></div>"+
      "</div>"+
      "<br><div class='row'><div class='col-md-6'>"+
      "<label class='control-label'>Tindak Lanjut</label>"+
      "<input type='text' class='form-control' name='tindak_lanjut'/>"+
      "</div>"+
      "<div class='col-md-6'>"+
      "<label class='control-label'>Oleh</label>"+
      "<input type='text' class='form-control' name='oleh'/>"+
      "</div>"+
      "</div>"+
      "<br><div class='row'><div class='col-md-6'>"+
      "<label class='control-label'>Hasil</label>"+
      "<input type='text' class='form-control' name='hasil'/>"+
      "</div>"+
      "</div>";
     });
   });

  </script>
@endsection
