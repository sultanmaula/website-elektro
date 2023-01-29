@extends('layouts.main')
@section('title')
    Ubah Data Indikator CPL
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Ubah Data Indikator CPL</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-indikator-cpl')}}">Indikator Capaian Pembelajaran Lulusan</a></li>
                <li class="breadcrumb-item active">Ubah Data Indikator CPL</li>
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
            <form action="{{route('update-indikator-cpl', $indikator_cpl[0]->id)}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Indikator Kinerja CPL</label>
                  <input type="text" class="form-control" name="indikator_kinerja_cpl" value="{{$indikator_cpl[0]->indikator_kinerja}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Kode Indikator</label>
                            <input type="text" class="form-control" name="kode_indikator_cpl" value="{{$indikator_cpl[0]->kode_indikator}}">
                        </div>
                        <div class="col-md-8">
                            <label>CPL</label>
                            <select type="text" class="form-control" name="id_cpl">
                                <option value="">Pilih CPL</option>
                                @foreach ($cpl as $c)
                                    @if ($c->id == $indikator_cpl[0]->id_cpl)    
                                        <option value="{{$c->id}}" selected>{{$c->kode}}</option>
                                    @else
                                        <option value="{{$c->id}}">{{$c->kode}}</option>
                                    @endif
                                @endforeach
                            </select>
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