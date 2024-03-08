@extends('../adminlayot')
@section('content')
    <div class="main-content">
      <!-- Page content -->
      <div class="container mt-5 pb-5">
          @if (session('pesan'))
                <div class="alert alert-success" role="alert">
                    {{session('pesan')}}
                  </div>
                @endif
                {{-- pesan jika validasi gagal --}}
                @if ($errors->any())
                <div class="alert alert-success" role="alert">
                    Gagal registrasi
                  </div>
                @endif
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-2">
            <div class="card bg-secondary border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>sign up</small>
                </div>
                <form action="{{url('tambahpetu')}}" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="Username" class="form-label">Username</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" placeholder="Username" type="text" name="Username" id="Username">
                    </div>
                    @error('Username')
                              <div class="form-text">
                               {{$message}}
                              </div>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="password" class="form-label">Password</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <input class="form-control" placeholder="password" type="password" name="password" id="password">
                    </div>
                    @error('password')
                    <div class="form-text">
                     {{$message}}
                    </div>
                @enderror
                  </div> 
                  <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" placeholder="Email" type="email" name="email" id="email">
                    </div>
                    @error('email')
                              <div class="form-text">
                               {{$message}}
                              </div>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="namalengkap" class="form-label">nama Lengkap</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" placeholder="Nama lengkap" type="text" name="namalengkap" id="namalengkap">
                    </div>
                    @error('namalengkap')
                    <div class="form-text">
                     {{$message}}
                    </div>
                @enderror
                  </div>
                  <div class="form-group">
                      <label for="noHp" class="form-label">No Hp</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" placeholder="No Hp" type="text" name="noHp" id="noHp">
                    </div>
                    @error('noHp')
                              <div class="form-text">
                               {{$message}}
                              </div>
                          @enderror
                  </div>             
                  <div class="text-center">
                    <button class="btn btn-primary mt-4">Create account</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection