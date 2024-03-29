<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login (Admin) | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/togglepassword_admin.js') }}"></script>
</head>
<body>
    <div class="container">
        <h1>Login (Admin)</h1>
        <h3>Silahkan "Login" terlebih dahulu!</h3>

        @if(session("error"))
        <h5 class="alert alert-danger text-center">{{session("error")}}</h5>
        @endif

        <form class="p-3 mt-3" action="{{url('admin/login')}}" method="post">
            @method("POST")
            @CSRF
            <div class="form-group form-anim">

                <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
                <div class="bar"></div>
                <div class="form-inline">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" style="width:90%;">
                    <div id="showPasswordButton" class="eye-icon" onclick="togglePassword()">
                        <img src="{{ asset('storage/image/eye.png') }}" width="33px" height="33px" alt="Show Password">
                    </div>
                </div>
                <div class="bar" style="width:90%;"></div>
                <button type="submit" name="" class="hoverable-element btn mt-3 btn-block btn-grad active-element">Login</button>
            </div>
        </form>
        <div class="text-center">
            <p><a href="#">Lupa kata sandi?</a> atau <a href="{{url('register')}}">Daftar</a></p>
        </div>
    </div>
    </div>

</body>
</html>