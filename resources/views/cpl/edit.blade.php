@extends('layouts.main')
@section('title')
    Ubah Data CPL
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Ubah Data Capaian Pembelajaran Lulusan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-cpl')}}">Capaian Pembelajaran Lulusan</a></li>
                <li class="breadcrumb-item active">Ubah Data CPL</li>
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
            <form action="{{route('update-cpl', $cpl->id)}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Capaian Pembelajaran Lulusan (CPL)</label>
                  <input type="text" class="form-control" name="nama_cpl" value="{{$cpl->nama}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Kode CPL</label>
                            <input type="text" class="form-control" name="kode_cpl" value="{{$cpl->kode}}">
                        </div>
                        <div class="col-md-4">
                            <label>Kategori CPL</label>
                            <input type="text" class="form-control" name="kategori_cpl" value="{{$cpl->kategori}}">
                        </div>
                        <div class="col-md-4">
                            <label>Atribut CPL</label>
                            <input type="text" class="form-control" name="atribut_cpl" value="{{$cpl->atribut}}">
                        </div>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-pen mr-2"></i>Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection