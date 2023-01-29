@extends('layouts.main')
@section('semua-matkul')
    active
@endsection
@section('title')
    Semua Mata Kuliah
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
@section('content')
<div class="p-3">
    <table class="table table-bordered" id="all_matkul">
        <thead>
            <tr>
                <th>Sem.</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th>CPL</th>
                <th>Indikator CPL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matkul as $m)  
            <tr>
                <td>{{$m->semester}}</td>
                <td>{{$m->nama}}</td>
                <td>{{$m->sks}}</td>
                @php
                    if (!empty($m->id_cpl)) {
                        $id_cpl = json_decode($m->id_cpl);
                        $cpl = [];
                        foreach($id_cpl as $id) {
                            $_cpl = \DB::table('cpl')->select(array('nama', 'kode'))->where('id', $id)->get();
                            $cpl[] = $_cpl;
                        }
                    } else {
                        $cpl = [];
                    }
                @endphp
                <td>
                    @foreach ($cpl as $cp)
                        @foreach ($cp as $c)
                        <ul>
                            <li>
                                <p>{{$c->nama}} <small class="text-muted">({{$c->kode}})</small></p>
                            </li>
                        </ul>
                        @endforeach
                    @endforeach
                </td>
                @php
                    if (!empty($m->id_indikator_cpl)) {
                        $id_indikator_cpl = json_decode($m->id_indikator_cpl);
                        $indikator_cpl = [];
                        foreach($id_indikator_cpl as $id) {
                            $_indikator_cpl = \DB::table('indikator_cpl')->select(array('indikator_kinerja', 'kode_indikator'))->where('id', $id)->get();
                            $indikator_cpl[] = $_indikator_cpl;
                        }
                    } else {
                        $indikator_cpl = [];
                    }
                @endphp
                <td>
                    @foreach ($indikator_cpl as $cp)
                        @foreach ($cp as $c)
                        <ul>
                            <li>
                                <p>{{$c->indikator_kinerja}} <small class="text-muted">({{$c->kode_indikator}})</small></p>
                            </li>
                        </ul>
                        @endforeach
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#all_matkul').DataTable( {
            "order": [[ 3, "desc" ]]
        } );
    });
</script>
@endsection