@extends('layouts.main')
@section('daftar-cpl')
    active
@endsection
@section('cpl')
    active
@endsection
@section('title')
    Tambah CPL
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Capaian Pembelajaran Lulusan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-cpl')}}">Capaian Pembelajaran Lulusan</a></li>
                <li class="breadcrumb-item active">Tambah CPL</li>
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
            <form action="{{route('store-cpl')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Capaian Pembelajaran Lulusan (CPL)</label>
                  <input type="text" class="form-control" name="nama_cpl" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Kode CPL</label>
                            <input type="text" class="form-control" name="kode_cpl" required>
                        </div>
                        <div class="col-md-4">
                            <label>Kategori CPL</label>
                            <input type="text" class="form-control" name="kategori_cpl" required>
                        </div>
                        <div class="col-md-4">
                            <label>Atribut CPL</label>
                            <input type="text" class="form-control" name="atribut_cpl" required>
                        </div>
                    </div>
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