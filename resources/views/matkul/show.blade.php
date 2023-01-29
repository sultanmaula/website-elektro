@extends('layouts.main')
@section('title')
    Detail Mata Kuliah
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Detail Mata Kuliah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-matkul')}}">Mata Kuliah</a></li>
                <li class="breadcrumb-item active">Detail Mata Kuliah</li>
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
                  <label>Nama Mata Kuliah</label>
                  <p>{{$matkul->nama}}</p>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label>SKS Mata Kuliah</label>
                        <p>{{$matkul->sks}}</p>
                    </div>
                    <div class="col-md-2">
                        <label>Semester Mata Kuliah</label>
                        <p>{{$matkul->semester}}</p>
                    </div>
                    <div class="col-md-8">
                        <label>Dosen Pengampu Mata Kuliah</label>
                        @if ($matkul->id_dosen != 0)
                            @foreach ($dosen as $d)
                                @if ($d->id == $matkul->id_dosen)
                                    <p>{{$d->nama}}</p>
                                @endif
                            @endforeach
                        @else
                            <p>-</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                  <label>Capaian Pembelajaran Lulusan</label><br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">Kode</th>
                        <th class="text-center">Capaian Pembelajaran Lulusan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($matkul->id_cpl != NULL)
                        @foreach ($cpl as $cp)
                          @foreach ($cp as $c)
                            <tr>
                              <td class="text-center">
                                <span class="badge rounded-pill badge-info">{{$c->kode}}</span>
                              </td>
                              <td>
                                <p>{{$c->nama}}</p>
                              </td>
                            </tr>
                          @endforeach
                        @endforeach
                      @else
                      <tr>
                        <td colspan="2" class="text-center">Data tidak ditemukan</td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <label>Indikator CPL</label><br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">Kode Indikator</th>
                        <th class="text-center">Indikator Kinerja</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($matkul->id_indikator_cpl != NULL)
                        @foreach ($indikator_cpl as $cp)
                          @foreach ($cp as $c)
                          <tr>
                            <td class="text-center">
                              <span class="badge rounded-pill badge-info">{{$c->kode_indikator}}</span>
                            </td>
                            <td>
                              <p>{{$c->indikator_kinerja}}</p>
                            </td>
                          </tr>
                          @endforeach
                        @endforeach
                      @else
                        <tr>
                          <td colspan="2" class="text-center">Data tidak ditemukan</td>
                        </tr>
                      @endif
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <label>Capaian Pembelajaran Mata Kuliah</label>
                  <p>
                    @if ($matkul->cpmk != NULL)
                    {{$matkul->cpmk}}   
                    @else
                    -
                    @endif
                  </p>
                </div>
                <div class="form-group">
                  <label>Materi</label>
                  <p>
                    @if ($matkul->materi != NULL)
                    {{$matkul->materi}}   
                    @else
                    -
                    @endif
                  </p>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <p>
                    @if ($matkul->keterangan != NULL)
                    {{$matkul->keterangan}}   
                    @else
                    -
                    @endif
                  </p>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
@endsection