<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{ $buku->Judul }} | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <style>
        html,
        body {
            background-color: rgb(37, 22, 4);
            background-image: url('../storage/image/Library_Entrance.png');
            background-size: auto;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')
    <div class="container-fluid mt-4 bookdetail-container">
        <a href="{{ url('library') }}"><button type="button" class="btn btn-outline-warning">Kembali</button></a>
        @if (session()->has('Info'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('Info') }}
            </div>
        @endif
        <div class="container-fluid mt-2 mb-5 d-inline-flex justify-content-center flex-wrap">
            <div style="position: relative;">
                <img src="../storage/image/book/{{ $buku->Sampul }}" width="200" height="300" class="d-block">
            </div>
            <form action="{{ url("/edit/$buku->BukuID") }}" method="POST" enctype="multipart/form-data" class="mb-3">
                @method('POST')
                @csrf
                <div class="d-column mx-4 text-center">
                    <input type="text" name="Judul" value="{{ $buku->Judul }}">
                    <textarea class="" name="Penulis" id="Penulis" rows="1" placeholder="Penulis">{{ $buku->Penulis }}</textarea>
                    <textarea class="" name="Penerbit" id="Penerbit" rows="1" placeholder="Penerbit">{{ $buku->Penerbit }}</textarea>
                    <input type="date" class="form-control" id="TahunTerbit" name="TahunTerbit" min="1900"
                        max="2025" value="{{ $buku->TahunTerbit }}" style="width: 26%"
                        placeholder="{{ $buku->TahunTerbit }}" />
                    <textarea name="Isi" id="Isi" cols="30" rows="10">{{ $buku->Isi }}</textarea>
                    <p style="text-align: start;">{{ $buku->Deskripsi }}</p>
                    <button type="submit" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-right: 3px; margin-top:">Simpan</button>
                </div>
            </div><br>
            </form>
        </div>
        @foreach ($buku->kategori as $kategoribuku)
            <div>
                <h2>Categories: {{ $kategoribuku->NamaKategori }}</h2>
        @endforeach
    </div>

    @if (in_array(Auth::user()->role, ['admin', 'petugas']))
        <a href="../hapus/{{ $buku->BukuID }}"><button type="button"
                class="btn btn-outline-danger float-end mx-4">Hapus</button></a>
    @endif

</body>

</html>
