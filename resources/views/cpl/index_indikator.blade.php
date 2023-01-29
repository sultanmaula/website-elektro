@extends('layouts.main')
@section('daftar-indikator-cpl')
    active
@endsection
@section('cpl')
    active
@endsection
@section('title')
Indikator Capaian Pembelajaran Lulusan
@endsection
@section('content')
<!-- Content Header (Page header) -->
<meta name="csrf-token" content="{{csrf_token()}}">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Indikator Capaian Pembelajaran Lulusan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">Indikator Capaian Pembelajaran Lulusan</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <a href="{{ route('tambah-indikator-cpl') }}" class="btn btn-sm btn-info m-2"><i class="fa fa-plus mr-2"></i> Tambah Indikator Capaian Pembelajaran Lulusan</a>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>CPL</th>
            <th>Kode Indikator</th>
            <th width="60%">Indikator Kinerja</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @if ($indikator_cpl->isNotEmpty())
        @foreach ($indikator_cpl as $c)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$c->kode_cpl}}</td>
            <td>{{$c->kode_indikator}}</td>
            <td>{{$c->indikator_kinerja}}</td>
            <td>
              {{-- <a href="{{route('show-indikator-cpl', $c->id)}}" type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a> --}}
              <a href="{{route('edit-indikator-cpl', $c->id)}}" type="button" class="btn btn-success btn-xs"><i class="fa fa-pen"></i></a>
              <a class="btn btn-danger btn-xs" data-target="#modal" data-record-id="{{$c->id}}" data-toggle="modal"><i class="fa fa-trash-alt"></i></a>
            </td>
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
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
      
{{-- MODAL --}}
<div id="modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content" style="min-height: 220px;">
          <div class="modal-header">
              <h5>Konfirmasi Hapus</h5>
          </div>
          <div class="modal-body">
              <h6>Yakin menghapus Indikator Capaian Pembelajaran Lulusan ini?</h6>
              <div style="margin-top: 30px">
                  <button type="button" class="btn btn-danger btn-block btn-delete"><strong>Hapus</strong></button>
                  <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Batal</button>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
@section('script')
<script>
  // Delete Modal 
  $('#modal').on('click', '.btn-delete', function(e) {
      var $modalDiv = $(e.delegateTarget);
      var id = $(this).data('recordId');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      var route = "{{route('destroy-indikator-cpl', ":id")}}";
      route = route.replace(':id', id);
      $.post(route).then()
      $modalDiv.addClass('loading');
      setTimeout(function() {
          $modalDiv.modal('hide').removeClass('loading');
          location.reload();
      });
  });

  $('#modal').on('show.bs.modal', function(e) {
      var data = $(e.relatedTarget).data();
      $('.title', this).text(data.recordTitle);
      $('.btn-delete', this).data('recordId', data.recordId);
  });
</script>
@endsection