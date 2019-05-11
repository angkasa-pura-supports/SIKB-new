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
            {!! Form::model($idCeklist, ['route'=>['laporanCeklist-toilet.checklistStore', $idCeklist->id], 'files'=>true]) !!}
              {{ csrf_field() }}
              <div class="row">
                <input type="hidden" name="ceklist_toilet_id" value="{{ $idCeklist->id }}">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nama_ceklist') ? ' has-danger' : '' }}">
                    {!! Form::label('nama_ceklist', 'Jenis Checklist', ['class'=>'control-label']) !!}
                    <select class="select2 form-control custom-select" name="nama_ceklist" id="pilihValue" placeholder="Masukkan sesuatu...">
                      <option selected disabled>--Pilih--</option>
                      @php
                        $sudahDipilih = App\UploadCeklistToilet::where('ceklist_toilet_id', $idCeklist->id)->get();
                        $listUpload = [];
                        foreach ($sudahDipilih as $pilih) {
                          $listUpload[]=$pilih->nama_ceklist;
                        }
                        $inspeksi = ['Keharuman', 'Lantai', 'Toilet Bowl', 'Dinding', 'Tempat Sampah', 'Cermin', 'Washbasin', 'Sabun Cuci Tangan',
                        'Kloset', 'Tissue Roll', 'Urinal', 'Handdryer', 'Pintu', 'Janitor'];
                      @endphp
                      @foreach ($inspeksi as $value)
                        @if (in_array($value, $listUpload))
                        @else
                          <option value="{{ $value }}">{{ $value }}</option>
                        @endif
                      @endforeach
                    </select>
                    {{-- {!! Form::select('nama_ceklist', [
                      'Keharuman'=>'Keharuman',
                      'Lantai'=>'Lantai',
                      'Toilet Bowl'=>'Toilet Bowl',
                      'Dinding'=>'Dinding',
                      'Tempat Sampah'=>'Tempat Sampah',
                      'Cermin'=>'Cermin',
                      'Washbasin'=>'Washbasin',
                      'Sabun Cuci Tangan'=>'Sabun Cuci Tangan',
                      'Kloset'=>'Kloset',
                      'Tissue Roll'=>'Tissue Roll',
                      'Urinal'=>'Urinal',
                      'Handdryer'=>'Handdryer',
                      'Pintu'=>'Pintu',
                      'Janitor'=>'Janitor'], null, ['class'=>'select2 form-control custom-select', 'placeholder'=>'Masukkan sesuatu...', 'id'=>'pilihValue']);!!} --}}
                    @if ($errors->has('nama_ceklist'))
                      <small class="form-control-feedback">
                        {{ $errors->first('nama_ceklist') }}
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
      if (pilih == "Keharuman") {
        document.getElementById("pilihan").innerHTML="<div class='row'>"+
        "<div class='col-md-6'>"+
        "<input type='hidden' class='form-control' name='berkas_ceklist' value='Toilet Wangi'/>"+
        "<select class='select2 form-control custom-select' name='status'>"+
        "<option selected disabled>--Pilih--</option>"+
        "<option value='Wangi'>Wangi</option>"+
        "<option value='Tidak'>Tidak</option>"+
        "</select>"+
        "</div>";
      }else if (pilih == "Lantai" || pilih == "Toilet Bowl" || pilih == "Dinding" || pilih == "Tempat Sampah" || pilih == "Cermin" || pilih == "Washbasin" || pilih == "Kloset" || pilih == "Urinal" || pilih == "Pintu" || pilih == "Janitor") {
        document.getElementById("pilihan").innerHTML="<div class='row'>"+
        "<div class='col-md-6'>"+
        "<label class='control-label'>Gambar</label>"+
        "<input type='file' class='form-control' name='berkas_ceklist'/>"+
        "</div></div>"+
        "<br><div class='row'><div class='col-md-6'>"+
        "<label class='control-label'>Kondisi</label>"+
        "<select class='select2 form-control custom-select' name='status'>"+
        "<option selected disabled>--Pilih--</option>"+
        "<option value='Bersih'>Bersih</option>"+
        "<option value='Kotor'>Kotor</option>"+
        "</select>"+
        "</div></div>";
      }else {
        document.getElementById("pilihan").innerHTML="<div class='row'>"+
        "<div class='col-md-6'>"+
        "<label class='control-label'>Gambar</label>"+
        "<input type='file' class='form-control' name='berkas_ceklist'/>"+
        "</div></div>"+
        "<br><div class='row'><div class='col-md-6'>"+
        "<label class='control-label'>Kondisi</label>"+
        "<select class='select2 form-control custom-select' name='status'>"+
        "<option selected disabled>--Pilih--</option>"+
        "<option value='Ada'>Ada</option>"+
        "<option value='Tidak'>Tidak</option>"+
        "</select>"+
        "</div></div>";
      }
     });
   });

  </script>
@endsection
