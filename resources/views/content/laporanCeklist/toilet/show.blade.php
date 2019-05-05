@extends('front.layouts.front')
@section('title', 'Ceklist Toilet')
@section('cssAssets')
  @include('front.partials.css.cssSweetAlert')
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
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Ceklist Toilet</h4>
          </div>
          <div class="card-body">
            <form class="form-horizontal" role="form">
              <div class="form-body">
                <h3 class="box-title">Info</h3>
                <hr class="m-t-0 m-b-40">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Bandara : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ $data->bandara->nama_bandara }} </p>
                      </div>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Lokasi Toilet : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ $data->lokasiToilet->nama_toilet }} </p>
                      </div>
                    </div>
                  </div>
                  <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Pengawas : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ $data->pengawas->nama_karyawan }} </p>
                      </div>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Petugas : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ $data->petugas }} </p>
                      </div>
                    </div>
                  </div>
                  <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Shift : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ $data->shift }} </p>
                      </div>
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Tanggal Input : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ date("d-m-Y", strtotime($data->tanggal_input)) }} </p>
                      </div>
                    </div>
                  </div>
                  <!--/span-->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="control-label text-right col-md-3">Catatan : </label>
                      <div class="col-md-9">
                        <p class="form-control-static"> {{ $data->catatan }} </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <h3 class="box-title">Upload</h3>
                <hr class="m-t-0 m-b-40">
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr style="text-align:center">
                            <th>NO</th>
                            <th>INSPEKSI</th>
                            <th>GAMBAR</th>
                            <th>PRIA</th>
                            <th>WANITA</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $no = 0;
                          @endphp
                          @foreach ($ceklist as $value)
                            <tr>
                              <td style="text-align:center">{{ $no=$no+1 }}</td>
                              <td>{{ $value->nama_ceklist }}</td>
                              <td style="text-align:center">
                                @if ($value->nama_ceklist == "Keharuman")
                                  {{ $value->berkas_ceklist }}
                                @else
                                  <img style="height:100px" class="img-responsive" src="{{ asset('uploads/ceklist/toilet/'.$value->berkas_ceklist) }}"/>
                                @endif
                              </td>
                              <td style="text-align:center">{{ $value->status_pria }}</td>
                              <td style="text-align:center">{{ $value->status_wanita }}</td>
                            </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
@section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
  @include('front.partials.js.jsDataTables')
@endsection
