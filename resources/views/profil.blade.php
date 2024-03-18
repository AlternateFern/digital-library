<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile User | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        html, body {
            background-color: rgb(71, 48, 22);
            background-image: url("storage/image/Floor_of_Philosophy.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
        <div class="container mt-5" style="background-color:rgb(22, 11, 1); border-radius:5px; padding: 20px;">
            <h1>Profile</h1>
            <h4>Name: {{ $user->username }}</h4>
            <h4>Email: {{ $user->email }}</h4>
            <h4>Nama Lengkap: {{ $user->namaLengkap }}</h4>
            <h4>Alamat : {{ $user->alamat }}</h4>
         </div>
         <a href="{{ url('peminjaman') }}" style="margin:95px;">
            <button type="button" class="btn btn-outline-warning">Peminjaman Buku Anda</button>
          </a>
</body>
</html>