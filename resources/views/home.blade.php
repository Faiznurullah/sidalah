@extends('layouts.main')
@section('content')
<div class="container">
    
       <!-- Content Row -->
       <div class="row mt-2">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Guru</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guru->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Staff</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $staff->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $siswa->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <!-- Content Row -->

<div class="row">

    <div class="col-md-6">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tentang Aplikasi</h6>
        </div>
        <div class="card-body">

            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                    src="{{ asset('source') }}/foto/tutwurihandayani.ico">
            </div>

            <p class="text-justify">
            <a target="_blank" rel="nofollow" href="https://github.com/faiznurullah/sidalah">Si Dalah</a> 
            Adalah Sebuah Aplikasi Sistem Informasi Data Sekolah Sederhana Yang Di Bangun Menggunakan Laravel 8.
            Aplikasi Ini Berbasis Open Source Karena Bertujuan Sebagai Bahan Pembelajaran.
            </p>
           
        </div>
    </div>

    </div>




</div>



</div>
@endsection
