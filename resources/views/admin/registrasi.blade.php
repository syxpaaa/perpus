<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Pengaduan</title>
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap-icons.min.css">
   
    <style>
        #main .card{
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div id="main" class="d-flex vh-100 align-items-center"  style="background-color: #FBF9F1;">
        <div class="container-fluid">
            <div class="card mx-auto border-0"  style="background-color: #AAD7D9;">
                <div class="card-body">
                    <h1 class="h1">Laporkan !!</h1>
                    <h3 class="h4 mb-4 ">Selamat datang</h3>
                    @if (session('pesan'))
                    <div class="alert alert-primary" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                      {{--pesan jika validasi gagal--}}
                    @if ($errors->any())
                    <div class="alert alert-primary" role="alert">
                        Gagal registrasi
                      </div>
                    @endif

                    <form action="{{url('registrasi')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
                            @error('Username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
                            @error('password')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email">
                            @error('email')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="namalengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="nama lengkap">
                            @error('namalengkap')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">no Hp</label>
                            <input type="number" class="form-control" name="noHp" id="noHp" placeholder="no Hp">
                            @error('noHp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-light form-control">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>