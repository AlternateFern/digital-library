<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile User | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirmdeletemodal.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        html, body {
            background-color: rgb(71, 48, 22);
            background-image: url("storage/image/bg/Floor_of_Philosophy.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
         <div class="container mt-5" style="background-color:rgb(22, 11, 1); border-radius:5px; padding: 20px; position: relative;">
            <button onclick="openModal()" class="logoutbtn" href="" style="color: red;position: absolute; top: 10px; right: 10px;"><img src="storage/image/logout.png" width="35" height="35">Log out</button>
            <div id="DeleteConfirmModal" class="modal">
                <div class="modal-content">
                  <span class="close" onclick="closeModal()">&times;</span>
                  <p>Apakah anda yakin ingin logout?</p>
                  <button id="deletebutton" onclick="confirmDelete()">Logout</button>
                </div>
              </div>

            <h1>Profile</h1>
            <h4>ID: {{ $user->UserID }}</h4>
            <h4>Name: {{ $user->username }}</h4>
            <h4>Email: {{ $user->email }}</h4>
            <h4>Nama Lengkap: {{ $user->namaLengkap }}</h4>
            <h4>Alamat : {{ $user->alamat }}</h4><br>
            <a href="peminjaman/{{ $user->UserID}}" class="mt-5">
                <button type="button" class="btn btn-outline-warning">Peminjaman Buku Anda</button>
            </a>
        </div>
        <div class="container mt-4">
            <a href="{{url('home')}}"><button type="button" class="btn btn-outline-warning">Kembali</button></a>
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
                window.location.href = "{{ url('logout') }}";
            }
        </script>
</body>
</html>