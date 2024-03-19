@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body  style="background-image: url('storage/image/The_Library.jpg');
background-repeat: no-repeat;
  background-size: cover;">
    
    <div class="col pt-5 mt-1 mx-5" style="background-color: rgb(22, 11, 1); padding: 50px;">
        @foreach($list as $peminjaman)
            <h2>User: {{ $peminjaman->user->username }}</h2>
            <h2>Nama Lengkap: {{ $peminjaman->user->namaLengkap }}</h2>
            <h2>Alamat: {{ $peminjaman->user->alamat }}</h2>
            <h2>Buku yang di Pinjam:</h2>
            <div class="container-buku-peminjaman">
            <img src="storage/image/book/{{ $peminjaman->buku->Sampul }}" width="200" height="300" class="d-block">
            <h2>Judul Buku: {{ $peminjaman->buku->Judul }}</h2>
            <h2>Tanggal Peminjaman Buku: {{ $peminjaman->TanggalPeminjaman }}</h2>
            <h2>Tanggal Pengembalian Buku: {{ $peminjaman->TanggalPengembalian }}</h2>
            <h2>Status Peminjaman Buku: {{ $peminjaman->StatusPeminjaman }}</h2>
            </div>
        <a href="{{ url('print') }}">
            <button type="button" class="btn btn-outline-primary">Print</button>
          </a>

          <a href="hapus_peminjaman/{{$peminjaman->PeminjamanID}}"><img src="../storage/image/trashcan.png" width="35" height="35"></a>
          @endforeach
    </div>
</body>

</html>