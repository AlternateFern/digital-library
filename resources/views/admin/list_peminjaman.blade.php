@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Peminjaman</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirmdeletemodal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('storage/image/bg/The_Library.jpg');
background-repeat: no-repeat;
  background-size: cover;">
    
    
    <div class="col pt-5 mt-1 mx-5" style="background-color: rgb(22, 11, 1); padding: 40px;">
        <a href="{{url('profil')}}"><button type="button" class="btn btn-outline-warning mb-4">Kembali</button></a>
            <h2>List Peminjaman :</h2>
            <form action="{{ route('updateStatus') }}" method="POST">
            @csrf
            @foreach($list as $peminjaman)
            <div class="container-list-buku-peminjaman">
            <img src="storage/image/book/{{ $peminjaman->buku->Sampul }}" width="100" height="150" class="d-block" style="margin-right:20px;">
                <div class="mt-4" id="InfoPeminjaman">
                    <h2>Judul Buku: {{ $peminjaman->buku->Judul }}</h2>
                    <h2>Nama Peminjam: {{ $peminjaman->user->username }}</h2>
                    <h2>ID Peminjam: {{ $peminjaman->user->UserID }}</h2>
                    <h2>Tanggal Peminjaman Buku: {{ $peminjaman->TanggalPeminjaman }}</h2>
                    <h2>Tanggal Pengembalian Buku: {{ $peminjaman->TanggalPengembalian }}</h2>
                    <h2>Status Peminjaman Buku: {{ $peminjaman->StatusPeminjaman }}</h2>

                    <div>
                        <label for="status{{ $peminjaman->PeminjamanID }}">Update Status:</label>
                        <select name="peminjaman[{{ $peminjaman->PeminjamanID }}]" id="status{{ $peminjaman->PeminjamanID }}">
                            <option value="Pending" {{ $peminjaman->StatusPeminjaman === 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Diterima" {{ $peminjaman->StatusPeminjaman === 'Diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="Dipinjam"{{ $peminjaman->StatusPeminjaman === 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                            <option value="Selesai" {{ $peminjaman->StatusPeminjaman === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                </div>
            </div>
            @endforeach
            <button type="submit">Update Status</button>
        </form>
    </div>
</body>
</html>