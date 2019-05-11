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
            <li class="breadcrumb-item active">Ceklist Toilet</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="form-actions">
              <a href="{{ route('laporanCeklist-toilet.create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Data</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive m-t-40">
              <table id="example23" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bandara</th>
                    <th>Lokasi Toilet</th>
                    <th>Pengawas</th>
                    <th>Petugas</th>
                    <th>Shift</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Bandara</th>
                    <th>Lokasi Toilet</th>
                    <th>Pengawas</th>
                    <th>Petugas</th>
                    <th>Shift</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @php
                    $no=0;
                  @endphp
                  @foreach ($data as $value)
                    <tr>
                      <td>{{ $no=$no+1 }}</td>
                      <td>{{ $value->bandara->nama_bandara }}</td>
                      <td>{{ $value->lokasiToilet->nama_toilet }}</td>
                      <td>{{ $value->pengawas->nama_karyawan }}</td>
                      <td>{{ $value->petugas }}</td>
                      <td>{{ $value->shift }}</td>
                      <td>{{ date("d-m-Y", strtotime($value->tanggal_input)) }}</td>
                      <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                          @php
                            $jumlahCeklist = App\UploadCeklistToilet::where('ceklist_toilet_id', $value->id)->count();
                          @endphp
                          @if ($jumlahCeklist == 14)
                          @else
                            <a href="{{ route('laporanCeklist-toilet.checklist', $value->id) }}" class="btn btn-success" title="Upload"><i class="fa fa-upload"></i></a>
                          @endif
                          <a href="{{ route('laporanCeklist-toilet.show', $value->id) }}" class="btn btn-info" title="Detail"><i class="fa fa-search"></i></a>
                          <a href="{{ route('laporanCeklist-toilet.print', $value->id) }}" class="btn btn-warning" title="Print"><i class="fa fa-print"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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
