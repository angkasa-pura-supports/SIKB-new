@extends('front.layouts.front')
@section('title', 'Master Bandara')
@section('cssAssets')
  @include('front.partials.css.cssSweetAlert')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Master Bandara</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item active">Bandara</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="form-actions">
              <a href="{{ route('master-bandara.create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Data</a>
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
                    <th>Threeletter</th>
                    <th>Nama Bandara</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Threeletter</th>
                    <th>Nama Bandara</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  {{-- @php
                    $no=0;
                  @endphp
                  @foreach ($data as $value)
                    <tr>
                      <td>{{ $no=$no+1 }}</td>
                      <td>{{ $value->threeletter }}</td>
                      <td>{{ $value->nama_bandara }}</td>
                      <td>
                        {!! Form::open(['route'=>['master-bandara.destroy', $value->id], 'method'=>'DELETE']) !!}
                          <a href="{{ route('master-bandara.edit', $value->id) }}" class="btn btn-info btn-xs">Ubah</a>
                          {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach --}}
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
