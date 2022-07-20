@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Guru Sekolah</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">

    <div class="row mb-5 mt-5 ml-2">
        <div class="col-md-2 mt-4">
            <img class="img-thumbnail" src="{{ asset('source') }}/img-guru/{{ $guru->foto }}" alt="{{ $guru->foto }}" width="150px" height="150px">
       </div>
     <div class="col-md-6 mt-4">
         <p>Nama: {{ $guru->nama }}</p>
         <p>NIP:  {{ $guru->nip }}</p>
         <p>Alamat Tinggal:  {{ $guru->alamat }}</p>
         <p>Tanggal Lahir:  {{ $guru->tgl }}</p>
         <p>Jabatan:  {{ $guru->nama_jabatan }}</p>
         <p>Mapel:  {{ $guru->mapel }}</p>
         <p>Wali Kelas: {{ $guru->wali_kelas }}</p>
         <a  href="/guru" type="button" class="btn btn-info text-white">Kembali</a>
     </div>
     <div class="col-md-4">
     </div>
     
    </div>

        </div>
    </div>

</div>  
@endsection