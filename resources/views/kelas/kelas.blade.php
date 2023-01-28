@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kelas Sekolah</h6>
    </div>
<div class="card-body">

@if (session('Pesan'))
<div class="alert alert-success" role="alert">
    {{ session('Pesan') }}.
  </div>  
@endif

    <div class="table-responsive">
        <div class="mb-2">
        <a  href="/kelas/add" type="button" class="btn btn-info text-white mb-2">Tambah Data</a>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KELAS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
           
            <tbody>
      <?php $no = 1; ?>          
   @foreach($nama_kelas as $data)
                <tr>
                    <td>{{ $no++; }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                    <td>
                        <a href="/kelas/edit/{{ $data->id_kelas }}" type="button" class="btn btn-info text-white">Ubah</a>
                        <a href="/kelas/hapus/{{ $data->id_kelas }}" type="button" class="btn btn-danger" onclick = "return confirm('Yakin Data Akan Dihapus');">Hapus</a>
                    </td>
                </tr>
 @endforeach
            </tbody>
        </table>
    </div>
</div>  
</div> 
@endsection


