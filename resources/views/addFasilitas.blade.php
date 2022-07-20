@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Fasilitas Sekolah</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <div class="mb-2">
        </div>

        <form action="/fasilitas/insert/" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

        <div class="row">

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" value="{{ old('nama') }}" class="form-control  @error('nama') is-invalid @enderror is-valid" name="nama" id="exampleFormControlInput1" placeholder="Nama Fasilitas...">
            <div class="valid-feedback">
                @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
             @enderror
              </div>
        </div>       
      </div>

      <div class="col-md-6">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name ="deskripsi" value="{{ old('deskripsi') }}" id="description" rows="3"></textarea>
                @error('deskripsi')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
      </div>

        </div>

        <div class="row mb-4 mt-4">

      
            <div class="col-md-6">
              <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input value="{{ old('foto') }}" class="form-control  @error('foto') is-invalid @enderror is-valid" name="foto"  type="file" id="formFile">
                <div class="valid-feedback">
                    @error('foto')
           <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                  </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
              <button class="btn btn-primary btn-md" type="submit">Kirim Data</button> 
              <a href="/staff" class="btn btn-info btn-md">Kembali</a>
                </div>   

              </div>
      

              

        </form>

    </div>
</div>  
</div> 

@endsection