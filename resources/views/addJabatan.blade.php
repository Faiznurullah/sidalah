@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Jabatan Sekolah</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <div class="mb-2">
        </div>

        <form action="/jabatan/insert/" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

        <div class="row mb-5">

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" value="{{ old('nama_jabatan') }}" class="form-control  @error('nama_jabatan') is-invalid @enderror is-valid" name="nama_jabatan" id="exampleFormControlInput1" placeholder="Nama Jabatan...">
            <div class="valid-feedback">
                @error('nama_jabatan')
    <div class="alert alert-danger">{{ $message }}</div>
             @enderror
              </div>
        </div>
      </div>

      <div class="col-md-6 mt-4">
        <button class="btn btn-primary btn-md" type="submit">Kirim Data</button> 
        <a href="/kelas" class="btn btn-info btn-md">Kembali</a>
          </div>   


        </div>

       

      
            

            
             
      

              

        </form>

    </div>
</div>  
</div> 

@endsection