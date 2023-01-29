@extends('layouts.main')
@section('roles')
    active
@endsection
@section('title')
    Tambah Role
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Role</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('roles')}}">Role</a></li>
                <li class="breadcrumb-item active">Tambah Role</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="card card-primary">
            <!-- form start -->
            <form action="{{route('store-roles')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-md-6">
                      <label>Nama Role</label>
                      <input type="text" class="form-control" name="name">
                  </div>
                  <div class="col-md-6">
                      <label>Permission</label>
                      <select class="form-control" name="permission[]" multiple>
                          @foreach ($permissions as $permission)
                              <option value="{{$permission->id}}">{{$permission->name}}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Status</label><br>
                  <input type="checkbox" name="active" checked data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-size="xs">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus mr-2"></i>Tambah</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection