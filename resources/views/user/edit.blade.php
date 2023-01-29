@extends('layouts.main')
@section('users')
    active
@endsection
@section('title')
    Ubah User
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Ubah User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('users')}}">User</a></li>
                <li class="breadcrumb-item active">Ubah User</li>
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
            <form action="{{route('update-users', $user->id)}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Role</label>
                        <select class="form-control" name="role" required>
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                            @if (in_array($role->id, $user->roles()->pluck('id')->toArray()))
                            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                            @else
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save mr-2"></i>Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection