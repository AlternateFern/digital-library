<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <h3>Selamat datang!</h3>
        @if(session("error"))
        <h5 class="alert alert-danger text-center">{{session("error")}}</h5>
        @endif
        <form class="px-3" action="{{ route('register') }}" method="POST">
            @method("POST")
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <div class="bar"></div>
                <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" placeholder="Nama Lengkap">
                <div class="bar"></div>
                <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail">
                <div class="bar"></div>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                <div class="bar"></div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <div class="bar"></div>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Konfirmasi Password">
                <div class="bar"></div>
                <button type="submit" name="" class="btn mt-4 btn-block btn-grad">Register</button>
            </div>
        </form>
        <div class="text-center">
            <a href="{{url('login')}}">Sudah Memiliki Akun?</a>
            <a href="{{url('admin_register')}}"
        </div>
    </div>
    </div>

</body>

</html>