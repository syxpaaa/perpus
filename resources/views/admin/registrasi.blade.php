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
    <div id="main" class="d-flex vh-100 align-items-center"  style="background-color: #abd9fa;">
        <div class="container-fluid">
            <div class="card mx-auto border-0"  style="background-color: #9DB2BF;">
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

                    <form action="{{url('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama_petugas" id="nama" placeholder="Nama Lengkap">
                            @error('nama')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            @error('username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                            @error('password')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">Telp</label>
                            <input type="text" class="form-control" name="telp" id="telp" placeholder="Telp">
                            @error('telp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">jeniskelamin</label>
                            <select class="form-select" name="jeniskelamin" id="jeniskelamin" placeholder="jeniskelamin">
                            <option value="laki-laki">laki laki</option>
                            <option value="perempuan">perempuan</option>
                            </select>
                            @error('level')
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