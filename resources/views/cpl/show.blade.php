@extends('layouts.main')
@section('title')
    Detail CPL
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Detail Capaian Pembelajaran Lulusan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-cpl')}}">Capaian Pembelajaran Lulusan</a></li>
                <li class="breadcrumb-item active">Detail CPL</li>
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
              <div class="card-body">
                <div class="form-group">
                  <label>Capaian Pembelajaran Lulusan (CPL)</label>
                  <p>{{$cpl->nama}}</p>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Kode CPL</label>
                            <p>{{$cpl->kode}}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Kategori CPL</label>
                            <p>{{$cpl->kategori}}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Atribut CPL</label>
                            <p>{{$cpl->atribut}}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <a href="{{ route('add-matkul-cpl', $cpl->id) }}" class="btn btn-primary mb-2 float-right"><i class="fa fa-plus mr-2"></i>Matkul di CPL ini</a>
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th>#</th>
                          <th>Semester</th>
                          <th>SKS</th>
                          <th>Nama</th>
                          <th>Dosen Pengampu</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if ($matkul->isNotEmpty())
                      @foreach ($matkul as $c)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$c->semester}}</td>
                          <td>{{$c->sks}}</td>
                          <td>{{$c->nama}}</td>
                          <td>{{$c->nama_dosen}}</td>
                        </tr>
                      @endforeach
                      @else
                      <tr>
                          <td colspan="5">
                              <p class="text-center">Data tidak ditemukan</p>
                          </td>
                      </tr>
                      @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection