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
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Username" id="Username" placeholder="Username" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" id="password" placeholder="password" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" placeholder="email" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Nama lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="nama lengkap" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">No Hp</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="noHp" id="noHp" placeholder="No Hp" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="basic-default-level" class="col-sm-2 col-form-label">Level</label>
                  <div class="col-sm-10">
                  <select class="form-select" name="level" id="level" placeholder="level">
                  <option value="admin">admin</option>
                  <option value="petugas">petugas</option>
                  </select>
                </div>
              </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">Tambah</button>
                  </div>
                  <div class="mb-3">
                    <a href="{{url('registrasi')}}" class="btn btn-primary w-100" type="reset">kembali</a>
                  </div>
              </form>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection