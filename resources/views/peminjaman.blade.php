@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirmdeletemodal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body  style="background-image: url('../storage/image/bg/The_Library.jpg');
background-repeat: no-repeat;
  background-size: cover;">
    
    <div class="col pt-5 mt-1 mx-5" style="background-color: rgb(22, 11, 1); padding: 40px;">
        @foreach($list as $peminjaman)
            <h2>Buku yang di Pinjam:</h2>
            <button onclick="openModal()" class="deletebtn-2" href="hapus_peminjaman/{{$peminjaman->PeminjamanID}}" style="color: red;">Batalkan Peminjaman<img src="../storage/image/trashcan.png" width="35" height="35" style="margin-left:10px;"></button>
            <div id="DeleteConfirmModal" class="modal">
                <div class="modal-content">
                  <span class="close" onclick="closeModal()">&times;</span>
                  <p>Apakah anda ingin membatalkan peminjaman buku {{ $peminjaman->buku->Judul }}?</p>
                  <button id="deletebutton" onclick="confirmDelete()">Delete</button>
                </div>
              </div>
            <div class="container-buku-peminjaman">
            <img src="../storage/image/book/{{ $peminjaman->buku->Sampul }}" width="200" height="300" class="d-block">
                <div class="mt-4" id="InfoPeminjaman">
                    <h2>Judul Buku: {{ $peminjaman->buku->Judul }}</h2>
                    <h2>Tanggal Peminjaman Buku: {{ $peminjaman->TanggalPeminjaman }}</h2>
                    <h2>Tanggal Pengembalian Buku: {{ $peminjaman->TanggalPengembalian }}</h2>
                    <h2>Status Peminjaman Buku: {{ $peminjaman->StatusPeminjaman }}</h2>
                </div>
            </div>
            @if (in_array($peminjaman->StatusPeminjaman, ['Diterima', 'Dipinjam', 'Selesai']))
                <a href="{{ url('print') }}">
                    <button type="button" class="btn btn-outline-primary">Print</button>
                </a>

                <a href="{{url('profil')}}"><button type="button" class="btn btn-outline-warning">Kembali</button></a>
            @else
            <div class="mt-5 text-center">
            <p>Status peminjaman buku {{ $peminjaman->buku->Judul }} anda masih dalam status <b>jeda</b>, mohon tunggu konfirmasi dari petugas.</p>

            <a href="{{url('profil')}}"><button type="button" class="btn btn-outline-warning">Kembali</button></a>
            </div>
            @endif
    </div>

    <script>
        var modal = document.getElementById("DeleteConfirmModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        function openModal() {
            modal.style.display = "block";
        }

        function closeModal() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        function confirmDelete() {
            window.location.href = "hapus_peminjaman/{{$peminjaman->PeminjamanID}}";
        }
    </script>
    @endforeach
</body>
</html>