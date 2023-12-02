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
            background-color: rgb(71, 48, 22);
            background-image: url("storage/image/Floor_Of_Philosophy.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
         <div class="container mt-3" style="position: fixed;top: 20%;left: 50%;transform: translate(-50%, -50%);">
          <h2 id="typing-text" style="text-shadow: 0px 1px 1.8px rgb(255, 217, 0); text-align:center;">Data Buku</h2>
         </div>
         <div class="container mt-3" style="position: fixed;top: 30%;left: 50%;transform: translate(-50%, -50%);">
         <a href="{{url('library')}}" style="text-align:center;">Lihat...</a>
         </div>
         <div class="blur" style="width: 20%; top: 22%;"></div>
         
        
</body>
</html>