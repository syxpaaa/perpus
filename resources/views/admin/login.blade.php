<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap-icons.min.css">
   
    <style>
        #main .card{
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div id="main" class="d-flex vh-100 align-items-center"  style="background-color: rgb(43, 155, 230), 199, 250);">
        <div class="container-fluid">
            <div class="card mx-auto border-0"  style="background-color: #9DB2BF;">
                <div class="card-body">
                    <h2 class="h2">SELAMAT DATANG</h2>
                    <h3 class="h5 mb-4 ">Silahkan Login</h3>
                    @if (session('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                    {{-- pesan jika validasi gagal --}}
                    @if ($errors->any())
                    <div class="alert alert-success" role="alert">
                        Gagal login
                      </div>
                    @endif
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" id="username" name="username" class="form-control py-2" placeholder="username">
                            @error('username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control py-2" placeholder="password">
                            @error('password')
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