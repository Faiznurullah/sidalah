@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Ekstrakulikuler Sekolah</h6>
    </div>
<div class="card-body">

@if (session('Pesan'))
<div class="alert alert-success" role="alert">
    {{ session('Pesan') }}.
  </div>  
@endif

    <div class="table-responsive">
        <div class="mb-2">
        <a  href="/eskul/add" type="button" class="btn btn-info text-white mb-2">Tambah Data</a>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
           
            <tbody>
      <?php $no = 1; ?>          
   @foreach($eskul as $data)
                <tr>
                    <td>{{ $no++; }}</td>
                    <td>{{ $data->nama }}</td>
                    <td><center><img src="{{ asset('source') }}/img-eskul/{{ $data->foto }}" alt="{{ $data->foto }}" width="100px" height="100px"></center></td>
                    <td>
                        <a href="/eskul/detail/{{$data->id}}" type="button" class="btn btn-primary">Detail</a>
                        <a href="/eskul/edit/{{ $data->id }}" type="button" class="btn btn-info text-white">Ubah</a>
                        <a href="/eskul/hapus/{{ $data->id }}" type="button" class="btn btn-danger" onclick = "return confirm('Yakin Data Akan Dihapus');">Hapus</a>
                    </td>
                </tr>
 @endforeach
            </tbody>
        </table>
    </div>
</div>  
</div> 
@endsection


