<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Library | Perpustakaan Digital / Digital Library</title>
        <link rel="stylesheet" href="{{ asset('css/library.css') }}" />
        <script src="{{ asset('js/refresh.js') }}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
            html,
            body {
                background-color: rgb(37, 22, 4);
                background-image: url('storage/image/Library_Entrance.png');
                background-size: cover;
            }

            td {
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container mt-3">
            <h2 class="data-buku">Data Buku</h2>
        </div>
        <div class="container mt-3">
            @foreach ($buku as $buku)
            <a href="library/{{ $buku->BukuID }}" style="margin-right: 8px">
                <img src="storage/image/{{ $buku->Sampul }}" width="100" height="150"/>
            </a>
            @endforeach
            <br /><br />
            @if (in_array(Auth::user()->role, ['admin', 'petugas']))
            <a href="{{ url('add_book') }}">
              <button type="button" class="btn btn-outline-warning">Tambah buku</button>
            </a>@endif
        </div>
        <img class="bg-char" src="{{ asset('storage/image/patronlibrarians/char1.png') }}" alt="lor-characters"/>
        <script>
            // Randomize the background image with a 65% chance
            if (Math.random() < 0.65) {
                const randomImageIndex = Math.floor(Math.random() * 12) + 1;
                const imagePath = `storage/image/patronlibrarians/char${randomImageIndex}.png`;
                document.querySelector(".bg-char").src = `{{ asset('${imagePath}') }}`;
            }
        </script>
    </body>
</html>
