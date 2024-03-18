@extends('../adminlayot')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Tambah</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
            @if (session('pesan'))
            <div class="alert alert-primary" role="alert">
                {{ session('pesan') }}
            </div>
        @endif
        {{-- pesan jika validasi gagal --}}
        @if ($errors->any())
            <div class="alert alert-primary" role="alert">
                Gagal tambah
            </div>
        @endif
        <form action="{{ url('registrasi/tambah/') }}" method="post">
            @csrf
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Judul" id="Judul" value="{{ $editre->Judul }}" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Penulis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Penulis" id="Penulis" value="{{ $editre->Penulis }}"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Penerbit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Penerbit" id="Penerbit" value="{{ $editre->Penerbit }}" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Tahun Terbit</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="TahunTerbit" id="TahunTerbit" value="{{ $editre->TahunTerbit }}"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Stok</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok" id="stok" value="{{ $editre->stok }}"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">kategori</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="KategoriID" id="KategoriID" value="{{ $editre->KategoriID }}"/>
                  </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">Simpan</button>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary w-100" type="reset">Batal</button>
                  </div>
              </form>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection