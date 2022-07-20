@extends('layouts.main')
@section('content')

<div class="container">
    
    <!-- Content Row -->
    <div class="row mt-5">

        <div class="col-md-2">
        </div>

        <div class="col-md-8">

        <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Profile</h6>
        </div>

        <div class="card-body">

            <div class="row">

        <div class="col-md-6">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
            src="{{ asset('source') }}/foto/tutwurihandayani.ico">
        </div>


        <div class="col-md-6 mt-5">
       <p class="mt-5">Nama: {{ Auth::user()->name }}</p>
       <p>Nama: {{ Auth::user()->email }}</p>
       <a href="/home" class="btn btn-info btn-md">Kembali</a>
        </div>


        </div>
    </div>
    </div>

</div>
    </div>


</div>


@endsection