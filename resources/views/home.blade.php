{{-- detail laporan --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
        html, body {
            background-color: rgb(37, 22, 4);
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
        <header class="home-header" style="max-width:1500px; min-height:300px;">
        <div class="container mt-3 bg" style="position: fixed;top: 30%;left: 50%;transform: translate(-50%, -50%);">
            <div class="h2-background-shape">
                @if (in_array(Auth::user()->role, ['admin', 'petugas']))
                    <h2>Selamat Datang!</h2>
                    <p>Kamu login sebagai {{ Auth::user()->role }}!</p>
                @else
                    <h2 style="text-align:center; transform: skew(-20deg);">Selamat Datang!</h2>
                @endif
            </div>
         </div>
            </header>
         <div class="container mt-5">
         <h2 class="title-h2-glow">Trending Books</h2>
         <div class="container mt-3">
         <a href="library/1" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/Don-Quixote-COVER.jpg">
          </a>
          <a href="library/2" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/To_Kill_a_Mockingbird_(first_edition_cover).jpg">
          </a>
         </div>
         </div>
        
</body>
</html>