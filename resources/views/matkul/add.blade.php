@extends('layouts.main')
@section('daftar-matkul')
    active
@endsection
@section('title')
    Tambah Mata Kuliah
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Mata Kuliah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-matkul')}}">Mata Kuliah</a></li>
                <li class="breadcrumb-item active">Tambah Mata Kuliah</li>
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
            <form action="{{route('store-matkul')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Mata Kuliah</label>
                  <input type="text" class="form-control" name="nama_matkul" required>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label>SKS Mata Kuliah</label>
                        <input type="number" class="form-control" name="sks_matkul" min="1" max="10" required>
                    </div>
                    <div class="col-md-2">
                        <label>Semester Mata Kuliah</label>
                        <input type="number" class="form-control" name="semester_matkul" min="1" max="8" required>
                    </div>
                    <div class="col-md-8">
                        <label>Dosen Pengampu Mata Kuliah</label>
                        <select class="form-control" name="id_dosen" required>
                            <option value="">Daftar Dosen</option>
                            @foreach ($dosen as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Capaian Pembelajaran Lulusan</label><br>
                  <select class="selectpicker" name="id_cpl[]" multiple data-selected-text-format="count > 3" required>
                    @foreach ($cpl as $c)
                      <option value="{{$c->id}}">{{$c->kode}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Indikator Capaian Pembelajaran Lulusan</label><br>
                  <select class="selectpicker" name="id_indikator_cpl[]" multiple data-selected-text-format="count > 3" required>
                    @foreach ($indikator_cpl as $i)
                      <option value="{{$i->id}}">{{$i->kode_indikator}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <div class="col-md-6"></div>
                  <label>Capaian Pembelajaran Mata Kuliah</label>
                  <textarea class="form-control" name="cpmk" rows="4" required></textarea>
                </div>
                <div class="form-group">
                  <div class="col-md-6"></div>
                  <label>Materi</label>
                  <textarea class="form-control" name="materi" rows="4" required></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan_matkul" rows="4" required></textarea>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
  $(function () {
    $('select').selectpicker();
  });
</script>
@endsection