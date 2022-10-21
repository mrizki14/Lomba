@extends('templates.pages')
   
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Data Penyakit</h2>
                </div>
            </div>
        </div>
       
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
        <form action="{{ route('hospitals.update',$hospital->id) }}" method="POST">
            @csrf
            @method('PUT')
       
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nama Rumah Sakit</strong>
                        <input type="text" name="nama" class="form-control" value="{{ $hospital->nama }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Lokasi Rumah Sakit</strong>
                        <input type="text" name="lokasi" class="form-control" value="{{ $hospital->lokasi }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Deskripsi Rumah Sakit</strong>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $hospital->deskripsi }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Keahlian Penyakit</strong>
                        <input type="text" name="keahlian_penyakit" class="form-control" value="{{ $hospital->keahlian_penyakit }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Obat Penyakit</strong>
                        <input type="text" name="obat_penyakit" class="form-control" value="{{ $hospital->obat_penyakit }}" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Rinican Penanganan</strong>
                        <input type="text" name="rincian_penanganan" class="form-control" value="{{ $hospital->rincian_penanganan }}">
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Fasilitas Rumah Sakit</strong>
                        <input type="text" name="fasilitas" class="form-control" value="{{ $hospital->fasilitas }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Dukungan Rumah Sakit</strong>
                        <input type="text" name="dukungan" class="form-control" value="{{ $hospital->dukungan }}">
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
                </div>
            </div>
       
        </form>
    </div>
@endsection