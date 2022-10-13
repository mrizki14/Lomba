@extends('templates.pages')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('diseases.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Rumah Sakit</strong>
                {{ $hospital->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi Rumah Sakit</strong>
                {{ $hospital->lokasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Deskripsi Rumah Sakit</strong>
                {{ $hospital->deskripsi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Keahlian Penyakit</strong>
                {{ $hospital->keahlian_penyakit }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Obat Penyakit</strong>
                {{ $hospital->obat_penyakit }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Rinican Penanganan</strong>
                {{ $hospital->rincian_penanganan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Fasilitas Rumah Sakit</strong>
                {{ $hospital->fasilitas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Dukungan Rumah Sakit</strong>
                {{ $hospital->dukungan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar Rumah Sakit</strong>
                <img src="{{ asset('imagesHospitals/' .$hospital->image_path) }}" alt="" class="img-fluid d-block col-sm-4">
            </div>
        </div>
    </div>
</div>
@endsection