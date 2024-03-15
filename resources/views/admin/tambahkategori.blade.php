@extends('../adminlayot')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Tambah Kategori</h3>
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
                Gagal tambah Kategori
            </div>
        @endif
        <form action="{{ url('kategori/tambah/') }}" method="post">
            @csrf
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Nama kategoori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Namakategoori" id="Namakategoori" placeholder="Nama kategoori" />
                  </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">Tambah</button>
                  </div>
                  <div class="mb-3">
                    <a href="{{url('kategori')}}" class="btn btn-primary w-100" type="reset">kembali</a>
                  </div>
              </form>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection