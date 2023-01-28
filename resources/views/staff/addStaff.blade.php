@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Staff Sekolah</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <div class="mb-2">
        </div>

        <form action="/staff/insert/" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

        <div class="row">

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIP</label>
            <input type="number" value="{{ old('nip') }}" class="form-control  @error('nip') is-invalid @enderror is-valid" name="nip" id="exampleFormControlInput1" placeholder="Nip Staff...">
            <div class="valid-feedback">
                @error('nip')
    <div class="alert alert-danger">{{ $message }}</div>
             @enderror
              </div>
        </div>       
      </div>

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" value="{{ old('nama') }}" class="form-control  @error('nama') is-invalid @enderror is-valid" name="nama" id="exampleFormControlInput1" placeholder="Nama Staff...">
            <div class="valid-feedback">
                @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
             @enderror
              </div>
        </div>
      </div>

        </div>

        <div class="row">

      
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

            <div class="col-md-6">
              <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl">
                </div>   

              </div>
      

              <div class="row">

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" value="{{ old('alamat') }}" class="form-control  @error('alamat') is-invalid @enderror is-valid" name="alamat" id="exampleFormControlInput1" placeholder="Alamat...">
                    <div class="valid-feedback">
                      @error('alamat')
          <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="mb-3">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Pilih Salah Satu</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="jabatan">
                        @foreach($jabatan as $data_jab)
                        <option value="{{ $data_jab->id_jabatan  }}">{{ $data_jab->nama_jabatan }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="valid-feedback">
                      @error('jabatan')
          <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                    </div>
                  </div>
                </div>


              </div>

              <div class="row mt-2">
                <div class="col-md-6">
                  <div class="mb-3">
                    <button class="btn btn-primary btn-md" type="submit">Kirim Data</button> 
                    <a href="/staff" class="btn btn-info btn-md">Kembali</a>
                  </div>
                </div>

              </div>
              

        </form>

    </div>
</div>  
</div> 

@endsection