@extends('layouts.main')
@section('title')
  Ubah Mata Kuliah
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
              <h1 class="m-0">Ubah Mata Kuliah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('daftar-matkul')}}">Mata Kuliah</a></li>
                <li class="breadcrumb-item active">Ubah Mata Kuliah</li>
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
            <form action="{{route('update-matkul', $matkul->id)}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Mata Kuliah</label>
                  <input type="text" class="form-control" name="nama_matkul" value="{{$matkul->nama}}">
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label>SKS Mata Kuliah</label>
                        <input type="number" class="form-control" name="sks_matkul" value="{{$matkul->sks}}">
                    </div>
                    <div class="col-md-2">
                        <label>Semester Mata Kuliah</label>
                        <input type="number" class="form-control" name="semester_matkul" value="{{$matkul->semester}}">
                    </div>
                    <div class="col-md-8">
                        <label>Dosen Pengampu Mata Kuliah</label>
                        <select class="form-control" name="id_dosen">
                            <option value="">Daftar Dosen</option>
                            @foreach ($dosen as $d)
                                @if ($d->id == $matkul->id_dosen)
                                    <option value="{{$d->id}}" selected>{{$d->name}}</option>
                                @else
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Capaian Pembelajaran Lulusan</label><br>
                  <select class="selectpicker select-cpl" name="id_cpl[]" multiple data-selected-text-format="count > 3">
                    @foreach ($cpl as $c)
                        <option value="{{$c->id}}">{{$c->kode}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Indikator Capaian Pembelajaran Lulusan</label><br>
                  <select class="selectpicker select-indikator-cpl" name="id_indikator_cpl[]" multiple data-selected-text-format="count > 3" id="id_cpl">
                    @foreach ($indikator_cpl as $i)
                      @if ($i->id_cpl == $cpl[0]->id)
                        <option value="{{$i->id}}">{{$i->kode_indikator}}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <div class="col-md-6"></div>
                  <label>Capaian Pembelajaran Mata Kuliah</label>
                  <textarea class="form-control" name="cpmk" rows="4">{{$matkul->cpmk}}</textarea>
                </div>
                <div class="form-group">
                  <div class="col-md-6"></div>
                  <label>Materi</label>
                  <textarea class="form-control" name="materi" rows="4">{{$matkul->materi}}</textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan_matkul"">{{$matkul->keterangan}}</textarea>
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
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
  $(function () {
    $('.select-cpl').selectpicker('val', <?php echo $matkul->id_cpl?>);
    $('.select-indikator-cpl').selectpicker('val', <?php echo $matkul->id_indikator_cpl?>);
  });
</script>
<script>
  $(function () {
    $('.select-cpl').on('changed.bs.select', 
      function(e, clickedIndex, newValue, oldValue){
        console.log(this.value, oldValue);
      }
    );
  });
</script>
@endsection