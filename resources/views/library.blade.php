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
         <div class="container mt-3">
          <h2 style="text-shadow: 0px 1px 1.8px rgb(255, 217, 0); text-align:center;">Data Buku</h2>
         </div>
         <div class="container mt-3" style="position: fixed;top: 30%;left: 50%;transform: translate(-50%, -50%);">
         <a href="{{url('library')}}" style="text-align:center;">Lihat...</a>
         </div>


         <div class="container mt-3">
         <table class="table" style="margin-top:20px;">
            <tbody>
              @foreach ($buku as $buku)
                <tr>
                  <td><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                      width="25.000000pt" height="25.000000pt" viewBox="0 0 15.000000 38.000000"
                      preserveAspectRatio="xMidYMid meet">
        
                      <g transform="translate(0.000000,38.000000) scale(0.100000,-0.100000)"
                      fill="#000000" stroke="none">
                      <path d="M25 355 c-24 -23 -25 -28 -25 -173 0 -132 2 -151 18 -165 24 -22 55
                      -21 75 1 14 15 17 40 17 129 0 116 -8 139 -47 131 -15 -3 -19 -15 -21 -66 -2
                      -38 1 -62 8 -62 6 0 10 24 10 56 0 40 3 55 13 52 8 -3 12 -35 12 -113 0 -90
                      -3 -110 -17 -118 -12 -8 -21 -7 -32 2 -13 11 -16 38 -16 157 0 136 1 144 22
                      158 30 21 44 20 68 -4 18 -18 20 -33 20 -130 0 -67 4 -110 10 -110 6 0 10 45
                      10 115 0 110 -1 117 -25 140 -13 14 -36 25 -50 25 -14 0 -37 -11 -50 -25z"/>
                      </g>
                      </svg>
                  </td>
                  <td>{{  $buku->BukuID }}</td>
                  <td>{{  $buku->Judul }}</td>
                  <td>{{  $buku->Penulis }}</td>
                  <td>{{  $buku->Penerbit }}</td>
                  <td>{{  $buku->TahunTerbit }}</td>
                    {{-- <td>
                      <a href="detail_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-warning">Detail & Respon</button></a>
                      <a href="hapus_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-danger">Hapus</button></a> 
                    </td>  --}}
                </tr>
              @endforeach
            </div>
</body>
</html>