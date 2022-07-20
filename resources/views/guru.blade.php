@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Guru Sekolah</h6>
    </div>
<div class="card-body">

@if (session('Pesan'))
<div class="alert alert-success" role="alert">
    {{ session('Pesan') }}.
  </div>  
@endif

    <div class="table-responsive">
        <div class="mb-2">
        <a  href="/guru/add" type="button" class="btn btn-info text-white mb-2">Tambah Data</a>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Name</th>
                    <th>NIP</th>
                    <th>MAPEL</th>
                    <th>JABATAN</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
           
            <tbody>
      <?php $no = 1; ?>          
   @foreach($guru as $data)
                <tr>
                    <td>{{ $no++; }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nip }}</td>
                    <td>{{ $data->mapel }}</td>
                    <td>{{ $data->nama_jabatan }}</td>
                    <td><center><img src="{{ asset('source') }}/img-guru/{{ $data->foto }}" alt="{{ $data->foto }}" width="100px" height="100px"></center></td>
                    <td>
                        <a href="/guru/detail/{{$data->id}}" type="button" class="btn btn-primary">Detail</a>
                        <a href="/guru/edit/{{ $data->id }}" type="button" class="btn btn-info text-white">Ubah</a>
                        <a href="/guru/hapus/{{ $data->id }}" type="button" class="btn btn-danger" onclick = "return confirm('Yakin Data Akan Dihapus');">Hapus</a>
                    </td>
                </tr>
 @endforeach
            </tbody>
        </table>
    </div>
</div>  
</div> 
@endsection