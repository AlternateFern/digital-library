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
        @foreach ($buku as $buku)
        <div class="container-fluid mt-5 mb-5 d-inline-flex">
            <img src="../storage/image/{{ $buku->Sampul }}" width="200" height="300">
            <div class="d-column mx-4">
                <h2>{{ $buku->Judul }}</h2>
                <h2>{{ $buku->Penulis }}</h2>
                <h2>{{ $buku->Penerbit }}</h2>
                <h2>{{ $buku->TahunTerbit }}</h2>
            </div>
            </div>
            <a href="{{url('library')}}"><button type="button" class="btn btn-outline-warning">Kembali</button></a>
            @if (in_array(Auth::user()->role, ['admin', 'petugas']))
            <a href="../hapus/{{$buku->BukuID}}"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
            @endif
            @endforeach
</body>
</html>