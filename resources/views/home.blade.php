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
        <div class="container bg">
            <div class="header-h2" style="position: relative; top:88px;">
                @if (in_array(Auth::user()->role, ['admin', 'petugas']))
                    <h2>Library of the City</h2>
                    <p>Kamu login sebagai {{ Auth::user()->role }}!</p>
                @else
                    <h2>Library of the City</h2>
                    <p>Selamat datang di <i>Digital Library</i> atau Perpustakaan Digital, disini kamu bisa menemui berbagai macam jenis buku-buku yang dapat anda pinjam dengan mudah.</p>
                @endif
            </div>
         </div>
            </header>
         <div class="container mt-5">
         <h2 class="title-h2-glow">Recommended For You</h2>
         <div class="container mt-3 mb-5">
         <a href="library/1" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/book/Don-Quixote-COVER.jpg">
          </a>
          <a href="library/2" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/book/To_Kill_a_Mockingbird_(first_edition_cover).jpg">
          </a>
         </div>

         <h2 class="title-h2-glow">Novel</h2>
         <div class="container mt-3 mb-5">
         <a href="library/2" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/book/To_Kill_a_Mockingbird_(first_edition_cover).jpg">
          </a>
          <a href="library/3" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/book/TheUndergroundRailroad.png">
          </a>
          <a href="library/4" style="margin-right:20px;">
            <img width="100" height="150" src="storage/image/book/The_Great_Gatsby_Cover_1925_Retouched.png">
          </a>
         </div>
         </div>

         <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <h2>About Us</h2>
                        <p>Perpustakaan Digital atau <i>Digital Library</i></p>
                    </div>
                    <div class="col-md-6">
                        <h2>Contact Me</h2>
                        <p>Email: lahgataujuga@gmail.com</p>
                        <p>Phone: +62 865 3853 8838</p>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>