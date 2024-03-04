<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Registrasi</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
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
              <form action="{{url('registrasi')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Username" class="form-label">Username</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <input class="form-control" placeholder="Username" type="text">
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
                    <input class="form-control" placeholder="password" type="password">
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
                    <input class="form-control" placeholder="Email" type="email">
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
                    <input class="form-control" placeholder="Nama lengkap" type="text">
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
                    <input class="form-control" placeholder="No Hp" type="text">
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
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>