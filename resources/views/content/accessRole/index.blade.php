@extends('front.layouts.front')
@section('title', 'Access Role')
@section('cssAssets')
  @include('front.partials.css.cssSweetAlert')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Access Role</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Akses</li>
            <li class="breadcrumb-item active">Role</li>
          </ol>
          <a href="{{ route('access-role.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Akses Role</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive m-t-40">
              <table id="example23" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Role</th>
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

                      @php
                        $user = App\User::where('id', $value->model_id)->first();
                        $nameRole = Spatie\Permission\Models\Role::where('id', $value->role_id)->first();
                      @endphp
                      <td>{{ $user->name }}</td>
                      <td>{{ $nameRole->name }}</td>
                      <td>
                        {!! Form::open(['route'=>['access-role.destroy', $value->model_id], 'method'=>'DELETE']) !!}
                          <a href="{{ route('access-role.edit', $value->model_id) }}" class="btn btn-info btn-xs">Ubah</a>
                          {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
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
@endsection
@section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
  @include('front.partials.js.jsDataTables')
@endsection
