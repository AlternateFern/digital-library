{{-- detail laporan --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
        html, body {
            background-color: rgb(37, 22, 4);
        }

        td {
          vertical-align: middle;
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
         <div class="container mt-3">
          <h2 style="text-shadow: 0px 1px 1.8px rgb(255, 217, 0);">Tambah Buku</h2>
         </div>
         <div class="container mt-3">
                <form action="{{url('add_book')}}">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul buku">
                        <label for="exampleFormControlTextarea1" class="form-label">Penulis Buku</label>
                        <input type="text" class="form-control" name="Penulis" id="Penulis" placeholder="Penulis buku">
                      </div>
                      <label for="exampleFormControlTextarea1" class="form-label">Sampul Buku</label>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="foto">
                      </div>
                      <button type="submit" class="btn btn-success ml-auto">Tambah</button>
                      <a href="{{ url('home') }}" class="btn btn-warning ml-auto" style="margin-left: 7px;">Kembali</a>
                </form>
        </div>
</body>
</html>