@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Guru Sekolah</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <div class="mb-2">
        </div>

        <form action="/guru/update/{{ $guru->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

        <div class="row">

      <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIP</label>
            <input type="number" value="{{ $guru->nip }}" class="form-control  @error('nip') is-invalid @enderror is-valid" name="nip" id="exampleFormControlInput1" placeholder="Nip Guru..." readonly>
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
            <input type="text" value="{{ $guru->nama }}" class="form-control  @error('nama') is-invalid @enderror is-valid" name="nama" id="exampleFormControlInput1" placeholder="Nama Guru...">
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
                  <label for="exampleFormControlInput1" class="form-label">Mapel</label>
                  <input type="text" value="{{ $guru->mapel }}" class="form-control  @error('mapel') is-invalid @enderror is-valid" name="mapel" id="exampleFormControlInput1" placeholder="Mata Pelajaran...">
                  <div class="valid-feedback">
                    @error('mapel')
        <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                  </div>
                </div>       
            </div>
      

              <div class="col-md-6">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input value="{{ $guru->foto }}" class="form-control  @error('foto') is-invalid @enderror is-valid" name="foto"  type="file" id="formFile">
                    <div class="valid-feedback">
                        @error('foto')
               <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                      </div>
                    </div>
              </div>


         

              </div>
      

              <div class="row mb-5">

                <div class="col-md-6">
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Wali Kelas</label>
                      <input value="{{ $guru->wali_kelas }}" type="text" class="form-control  @error('wali_kelas') is-invalid @enderror is-valid" name="wali_kelas" id="exampleFormControlInput1" placeholder="Wali Kelas...">
                      <div class="valid-feedback">
                        @error('wali_kelas')
             <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                      </div>
                    </div>       
                </div>

                  <div class="col-md-6 mt-4">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl">
                  </div>
                  
              </div>

              <div class="row mb-5">

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" value="{{ $guru->alamat }}" class="form-control  @error('alamat') is-invalid @enderror is-valid" name="alamat" id="exampleFormControlInput1" placeholder="Alamat...">
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
                        <option value="{{ $data_jab->id  }}">{{ $data_jab->jabatan }}</option>
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


              <div class="row mb-5">

                <div class="col-md-6">
                  <div class="mb-3">
                    <button class="btn btn-primary btn-md" type="submit">Kirim Data</button> 
                    <a href="/guru" class="btn btn-info btn-md">Kembali</a>
                  </div>
                </div>

              </div>

        </form>

    </div>
</div>  
</div> 

@endsection