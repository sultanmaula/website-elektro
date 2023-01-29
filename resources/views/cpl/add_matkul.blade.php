@extends('layouts.main')
@section('title')
    Tambah Mata Kuliah di CPL
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
            <form action="{{route('store-add-matkul-cpl', $cpl->id)}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th>#</th>
                            <th>Semester</th>
                            <th>SKS</th>
                            <th>Mata Kuliah</th>
                            <th>Dosen Pengampu</th>
                            <th>Action</th>
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
                            <td>
                                <input type="checkbox" name="cpl_check[]" value="{{$c->id}}">
                            </td>
                          </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">
                                <p class="text-center">Data tidak ditemukan</p>
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save mr-2"></i>Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection