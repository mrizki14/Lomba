@extends('templates.pages')
  
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Data Penyakit</h2>
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
       
    <form action="{{ route('diseases.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama Penyakit</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Penyakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Kualifikasi</strong>
                    <input type="text" name="kualifikasi" class="form-control" placeholder="Masukan Kualifikasi Penyakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama Medis</strong>
                    <input type="text" name="nama_medis" class="form-control" placeholder="Masukan Nama Medis Penyakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <strong>Tingkat Bahaya</strong>
                <select class="form-select" name="tingkat_bahaya" required="required">
                    <option selected>Pilih Tingkat Bahaya</option>
                    <option value="menengah" >Menengah</option>
                    <option value="berbahaya" >Berbahaya</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Penyebab</strong>
                    <input type="text" name="penyebab" class="form-control" placeholder="Masukan Penyebab dari Penyakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Obat</strong>
                    <input type="text" name="obat" class="form-control" placeholder="Masukan Obat untuk menyembuhkan Penyakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Saran Rumah Sakit</strong>
                    <input type="text" name="saran_hospital" class="form-control" placeholder="Masukan Saran Rumah Sakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Gambar Penyakit</strong>
                    <input type="file" name="image" class="form-control" placeholder="Masukan gambar untuk mengetahui Penyakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengertian Organ</strong>
                    <textarea class="form-control" style="height:150px" name="pengertian" placeholder="Pengertian Mengenai Organ"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penjelasan</strong>
                    <textarea class="form-control" style="height:150px" name="penjelasan" placeholder="Penjelasan Mengenai Penyakit"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="{{ route('diseases.index') }}"> Back</a>
            </div>
        </div>
       
    </form>
</div>
@endsection