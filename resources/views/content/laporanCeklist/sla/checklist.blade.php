@extends('front.layouts.front')
@section('title', 'Ceklist SLA')
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
            <li class="breadcrumb-item">Ceklist SLA</li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            {!! Form::model($idCeklist, ['route'=>['laporanCeklist-sla.checklistStore', $idCeklist->id], 'files'=>true]) !!}
              {{ csrf_field() }}
              <div class="row">
                <input type="hidden" name="ceklist_sla_id" value="{{ $idCeklist->id }}">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('nama_ceklist') ? ' has-danger' : '' }}">
                    {!! Form::label('kondisi', 'Jenis Kondisi', ['class'=>'control-label']) !!}
                    <select class="select2 form-control custom-select" name="kondisi" id="pilihValue" placeholder="Masukkan sesuatu...">
                      <option selected disabled>--Pilih--</option>
                      @php
                        $sudahDipilih = App\UploadCeklistSla::where('ceklist_sla_id', $idCeklist->id)->get();
                        $listUpload = [];
                        foreach ($sudahDipilih as $pilih) {
                          $listUpload[]=$pilih->kondisi;
                        }
                        $kondisi = ['Kondisi Tanaman (Softscape)', 'Kondisi Sarana & Prasarana (Hardscape)', 'Kondisi Peralatan'];
                      @endphp
                      @foreach ($kondisi as $value)
                        @if (in_array($value, $listUpload))
                        @else
                          <option value="{{ $value }}">{{ $value }}</option>
                        @endif
                      @endforeach
                    </select>
                    @if ($errors->has('kondisi'))
                      <small class="form-control-feedback">
                        {{ $errors->first('kondisi') }}
                      </small>
                    @endif
                  </div>
                </div>
              </div>
              <div id="pilihan">

              </div>
              <div id="pilihKondisi">

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
      // var pilih = document.getElementById("pilihValue").value;
      document.getElementById("pilihan").innerHTML="<div class='row'>"+
      "<div class='col-md-6'>"+
      "<label class='control-label'>Kondisi</label>"+
      "<select class='select2 form-control custom-select' name='kondisi' id='kondisi'>"+
      "<option selected disabled>--Pilih--</option>"+
      "<option value='Baik'>Baik</option>"+
      "<option value='Kurang'>Kurang</option>"+
      "</select>"+
      "</div>"+
      "</div>";
    });
    $("#pilihan").change(function(){
     // alert("Selected value is : " + document.getElementById("pilihValue").value);
     var pilih = document.getElementById("kondisi").value;
     if (pilih == "Baik") {

     }else{
       document.getElementById("pilihKondisi").innerHTML="<div class='row'>"+
       "<div class='col-md-4'>"+
       "<label class='control-label'>Jadwal Penyiraman</label>"+
       "<select class='select2 form-control custom-select' name='jadwal_penyiraman'>"+
       "<option selected disabled>--Pilih--</option>"+
       "<option value='Pagi'>Pagi</option>"+
       "<option value='Siang'>Siang</option>"+
       "</select>"+
       "</div>"+
       "<div class='col-md-4'>"+
       "<label class='control-label'>Jadwal Pemupukan</label>"+
       "<select class='select2 form-control custom-select' name='jadwal_penyiraman'>"+
       "<option selected disabled>--Pilih--</option>"+
       "<option value='1x/bln'>1x/bln</option>"+
       "<option value='2x/bln'>2x/bln</option>"+
       "</select>"+
       "</div>"+
       "<div class='col-md-4'>"+
       "<label class='control-label'>Manpower</label>"+
       "<select class='select2 form-control custom-select' name='jadwal_penyiraman'>"+
       "<option selected disabled>--Pilih--</option>"+
       "<option value='Lengkap'>Lengkap</option>"+
       "<option value='Tidak'>Tidak</option>"+
       "</select>"+
       "</div>"+
       "<div class='col-md-6'>"+
       "<label class='control-label'>Temuan</label>"+
       "<input type='text' class='form-control' name='desk_temuan'/>"+
       "</div>"+
       "<div class='col-md-6'>"+
       "<label class='control-label'>Rencana Tindak Lanjut (RTL)</label>"+
       "<input type='text' class='form-control' name='desk_rtl'/>"+
       "</div>"+
       "<div class='col-md-4'>"+
       "<label class='control-label'>Gambar</label>"+
       "<input type='file' class='form-control' name='berkas_ceklist'/>"+
       "</div>"+
       "<div class='col-md-4'>"+
       "<label class='control-label'>PIC</label>"+
       "<input type='text' class='form-control' name='desk_rtl'/>"+
       "</div>"+
       "<div class='col-md-4'>"+
       "<label class='control-label'>Target Penyelesaian</label>"+
       "<input type='text' class='form-control' name='desk_rtl' id='mdate' placeholder='yyyy-mm-dd'/>"+
       "</div>"+
       "</div>";
     }
   });
   });

  </script>
@endsection
@section('jsAssets')
  @include('front.partials.js.jsForm')
@endsection
