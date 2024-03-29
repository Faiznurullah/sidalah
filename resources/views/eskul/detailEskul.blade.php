@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Estrakulikuler Sekolah</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">

    <div class="row mb-5 mt-5 ml-2">

        <div class="col-md-2 mt-4">
            <img class="img-thumbnail" src="{{ asset('source') }}/img-eskul/{{ $eskul->foto }}" alt="{{ $eskul->foto }}" width="150px" height="150px">
       </div>

     <div class="col-md-6 mt-4">
         <p>Nama: {{ $eskul->nama }}</p>
         <p>Deskripsi:</p>
         <p class="text-justify">{{ $eskul->deskripsi }}</p>
         <a  href="/eskul" type="button" class="btn btn-info text-white">Kembali</a>
     </div>
     
     <div class="col-md-4">
     </div>
     
    </div>

        </div>
    </div>

</div>  
@endsection