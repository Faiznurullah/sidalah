@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Siswa Sekolah</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <div class="mb-2">
        </div>

        <form action="/siswa/update/{{ $siswa->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

        <div class="row">

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIS</label>
            <input type="number" value="{{ $siswa->nis }}" class="form-control  @error('nip') is-invalid @enderror is-valid" name="nis" id="exampleFormControlInput1" placeholder="Nis Siswa..." readonly>
            <div class="valid-feedback">
                @error('nis')
     <div class="alert alert-danger">{{ $message }}</div>
             @enderror
              </div>
        </div>       
      </div>

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" value="{{ $siswa->nama }}" class="form-control  @error('nama') is-invalid @enderror is-valid" name="nama" id="exampleFormControlInput1" placeholder="Nama Siswa...">
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
                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                  @foreach($kelas as $data_jab)
                  <option value="{{ $data_jab->id_kelas  }}">{{ $data_jab->nama_kelas }}</option>
                  @endforeach
          </select>
                <div class="valid-feedback">
                    @error('kelas')
        <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                  </div>
            </div>
          </div>

          
              <div class="col-md-6">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input value="{{ $siswa->foto }}" class="form-control  @error('foto') is-invalid @enderror is-valid" name="foto"  type="file" id="formFile">
                    <div class="valid-feedback">
                        @error('foto')
               <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                      </div>
                    </div>
              </div>


              </div>


              <div class="row">

                <div class="col-md-6">
                  <div class="mb-3">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                      <input class="form-control" type="date" name="tgl">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" value="{{ $siswa->alamat }}" class="form-control  @error('alamat') is-invalid @enderror is-valid" name="alamat" id="exampleFormControlInput1" placeholder="Alamat...">
                    <div class="valid-feedback">
                      @error('alamat')
          <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                    </div>
                  </div>
                </div>


              </div>


              <div class="row mb-5">

              <div class="col-md-6 mt-4">
                <button class="btn btn-primary btn-md" type="submit">Kirim Data</button> 
                <a href="/siswa" class="btn btn-info btn-md">Kembali</a>
                  </div>  

              </div>
      

              

        </form>

    </div>
</div>  
</div> 

@endsection