<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $buku->Judul }} | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
        html, body {
            background-color: rgb(37, 22, 4);
            background-image: url('../storage/image/bg/Library_Entrance.png');
            background-size: auto;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            outline: none;
            background-color:transparent;
            border-color:transparent;
            color:rgb(255, 217, 0);
        }

        textarea {
            outline: none;
            background-color:transparent;
            border-color:rgb(255, 200, 98);
            color:rgb(255, 217, 0);
        }

        input[type=number]:focus {
            outline: none;
        }
    </style>
</head>
<body>
        @include('layouts.navbar')
        <div class="container-fluid mt-4 bookdetail-container">
            <a href="{{url('library')}}"><button type="button" class="btn btn-outline-warning">Kembali</button></a>
            @if (in_array(Auth::user()->role, ['admin', 'petugas']))
            <a class="editbtn" href="../edit/{{ $buku->BukuID }}"><img src="../storage/image/pencil.png" width="35" height="35"></a>
            @endif

            @if (session()->has('Info'))
            <div class="alert alert-success col-lg-8 mt-4" role="alert">
                {{  session('Info') }}
            </div>
            @endif
            <div class="container-fluid mt-2 mb-5 d-inline-flex justify-content-center">
                
                <div style="position: relative;">
                    <img src="../storage/image/book/{{ $buku->Sampul }}" width="200" height="300" class="d-block">
                    <form action="pinjam/{{$buku->BukuID}}" method="post" style="margin-top:5px; margin-left: 65px;">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">Pinjam</button>
                        </form>
                        @if (in_array(Auth::user()->role, ['admin', 'petugas']))
                        <a class="deletebtn" href="../hapus/{{$buku->BukuID}}"><img src="../storage/image/trashcan.png" width="35" height="35"></a>
                        @endif
                </div>
                    <div class="d-column mx-5">
                            <h2>{{ $buku->Judul }}</h2>
                            <p><b>Penulis:</b> {{ $buku->Penulis }}</p>
                            <p><b>Penerbit:</b> {{ $buku->Penerbit }}</p>
                            <p><b>Tahun Terbit:</b> {{ $buku->TahunTerbit }}</p>
                            <p style="text-align: start;"><b>Sinopsis:</b> {{ $buku->Deskripsi }}</p>
                        </div>
                    </div>
                    @foreach ($buku->kategori as $kategoribuku)
                        <div>
                            <h2>Kategori: {{ $kategoribuku->NamaKategori }}</h2>
                                @endforeach
                            </div>
                            @if (in_array(Auth::user()->role, ['admin', 'petugas']))
                            <a href="{{url('library')}}"><button type="button" class="btn btn-outline-warning">Ubah Kategori</button></a>
                            @endif
                    <div class="book-rating-container d-column mx-5 mt-5">
                    <form action="{{ route('ulasan.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="BukuID" value="{{ $buku->BukuID }}">
                        <h2>Rating :</h2><img src="../storage/image/star.png" width="35" height="35" style="margin-right:10px;"><input type="number" name="Rating" min="1" max="5" placeholder="1-5" required value="{{ $rating }}">
                        <h2 class="mt-4">Ulasan :</h2>
                        <textarea name="Ulasan" rows="3" cols="100" required></textarea><br>
                        <button class="btn btn-outline-warning" type="submit">Berikan Ulasan</button>
                    </form>
                    <br>
                    <div class="d-column mt-5">
                    <h2>Ulasan-Ulasan Pembaca</h2>
                    @if ($buku->ulasan)
                        @foreach ($buku->ulasan as $ulasan)
                            <p>{{ $ulasan->user->Username }}: {{ $ulasan->Ulasan }}</p>
                            <p>Rating: {{ $ulasan->Rating }}</p>
                        @endforeach
                    @else
                    <p>Belum ada komentar untuk buku ini.</p>
                    @endif
                    </div>
            </div>
        </div>
</body>
</html>