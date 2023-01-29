@extends('layouts.main')
@section('dashboard')
    active
@endsection
@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4 col-6 p-4">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $dosen }}</h3>
                <p>Dosen</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('daftar-dosen') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-4 col-6 p-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $matkul }}</h3>
                <p>Mata Kuliah</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('all-matkul') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection