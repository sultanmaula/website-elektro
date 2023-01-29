@extends('layouts.main')
@section('daftar-indikator-cpl')
    active
@endsection
@section('cpl')
    active
@endsection
@section('title')
    Tambah Indikator CPL
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Indikator CPL</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-indikator-cpl')}}">Indikator Capaian Pembelajaran Lulusan</a></li>
                <li class="breadcrumb-item active">Tambah Indikator CPL</li>
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
            <form action="{{route('store-indikator-cpl')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Indikator Kinerja CPL</label>
                  <input type="text" class="form-control" name="indikator_kinerja_cpl" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Kode Indikator</label>
                            <input type="text" class="form-control" name="kode_indikator_cpl" required>
                        </div>
                        <div class="col-md-8">
                            <label>CPL</label>
                            <select type="text" class="form-control" name="id_cpl" required>
                                <option value="">Pilih CPL</option>
                                @foreach ($cpl as $c)
                                    <option value="{{$c->id}}">{{$c->kode}}</option>
                                @endforeach
                            </select>
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