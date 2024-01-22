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

        .form-control {
          width: 40%;
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
         <div class="container mt-3">
          <h2 style="text-shadow: 0px 1px 1.8px rgb(255, 217, 0);">Tambah Buku</h2>
         </div>
         <div class="container mt-3">
                <form action="add_book" method="POST" enctype="multipart/form-data">
                  @method("POST")
                  @csrf

                    <div class="mb-3">
                        <label for="Judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul buku">
                        @error('Judul')
                          <div class="alert alert-danger">Kolom Judul Buku harus di isi minimal 2 huruf.</div>
                        @enderror
                        <label for="Penulis" class="form-label">Penulis Buku</label>
                        <input type="text" class="form-control" name="Penulis" id="Penulis" placeholder="Penulis buku">
                        @error('Judul')
                          <div class="alert alert-danger">Kolom Penulis Buku harus di isi minimal 3 huruf.</div>
                        @enderror
                        <label for="Penerbit" class="form-label">Penerbit Buku</label>
                        <input type="text" class="form-control" name="Penerbit" id="Penerbit" placeholder="Penerbit buku">
                        @error('Judul')
                          <div class="alert alert-danger">Kolom Penerbit Buku harus di isi minimal 4 huruf.</div>
                        @enderror
                        <label for="TahunTerbit">Tahun Terbit</label>
                        <input type="date" class="form-control" id="TahunTerbit" name="TahunTerbit" min="1100" max="2025" style="width: 13%;" placeholder="1100-2025">
                        @error('Judul')
                          <div class="alert alert-danger">Kolom Tahun Terbit harus di isi minimal dari tahun 1100 sampai dengan 2025.</div>
                        @enderror
                      <label for="Sampul" class="form-label">Sampul Buku</label>
                      <input type="file" class="form-control" id="Sampul" name="Sampul">
                      @error('Judul')
                          <div class="alert alert-danger">File untuk gambar Sampul Buku diperlukan.</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success ml-auto">Tambah</button>
                    <a href="{{ url('library') }}" class="btn btn-warning ml-auto" style="margin-left: 7px;">Kembali</a>
                </form>
        </div>
</body>
</html>