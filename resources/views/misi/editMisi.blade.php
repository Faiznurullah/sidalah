@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Visi Sekolah</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <div class="mb-2">
        </div>

        <form action="/misi/update/{{ $nama->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

        <div class="row mb-5">

      

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInamanput1" class="form-label">Nama</label>
            <input type="text" value="{{ $nama->nama }}" class="form-control  @error('nama') is-invalid @enderror is-valid" name="nama" id="exampleFormControlInput1" placeholder="Nama Visi...">
            <div class="valid-feedback">
                @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
             @enderror
              </div>
        </div>
      </div>

      <div class="col-md-6 mt-4">
        <button class="btn btn-primary btn-md" type="submit">Kirim Data</button> 
        <a href="/misi" class="btn btn-info btn-md">Kembali</a>
          </div>  


        </div>

        



             
      

              

        </form>

    </div>
</div>  
</div> 

@endsection