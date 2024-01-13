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
        }

        td {
          vertical-align: middle;
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
         <div class="container mt-3">
          <h2 style="text-shadow: 0px 1px 1.8px rgb(255, 217, 0); text-align:center;">Data Buku</h2>
         </div>
         <div class="container mt-3">
         {{-- <table class="table" style="margin-top:20px;">
            <tbody>
              @foreach ($buku as $buku)
                <tr>
                  <td><svg version="1.1" viewBox="0 0 1600 1600" width="30" height="30" xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(201 204)" d="m0 0c1.23-0.01 2.46-0.01 3.73-0.02 3.97-0.02 7.93-0.03 11.9-0.03h2.06c22.8-0.01 45.3 0.67 67.9 3.25 0.79 0.09 1.57 0.18 2.37 0.27 78.6 8.79 155 27.8 229 57.7 1.09 0.45 2.17 0.89 3.29 1.35 22.9 9.41 45.6 19.5 67.4 31.4 2.5 1.36 5.01 2.69 7.52 4.03 44.7 24 87 52.6 126 84.8 1.58 1.3 3.18 2.6 4.78 3.89 5.34 4.32 10.5 8.77 15.6 13.4 2.09 1.89 4.2 3.76 6.33 5.61 0.98 0.86 0.98 0.86 1.98 1.73 1.38 1.21 2.76 2.41 4.15 3.61 8.04 7.08 15.5 14.7 23.1 22.3 2.26 2.29 4.54 4.56 6.81 6.83 1.19 1.19 2.37 2.37 3.56 3.55 0.61 0.62 1.23 1.23 1.86 1.87l8.58 8.58c3.51-1.56 5.37-3.45 7.77-6.47 1.62-2 3.32-3.81 5.23-5.53h2c0.34-0.99 0.66-1.98 1-3h2c0.25-0.57 0.5-1.15 0.76-1.75 1.43-2.58 3.03-4.31 5.24-6.25h2c0.34-0.99 0.66-1.98 1-3 1.43-1.4 1.43-1.4 3.32-2.93 3.7-3.13 7.11-6.48 10.5-9.94 4.56-4.64 9.32-8.81 14.4-12.9 2.97-2.43 5.78-5.01 8.58-7.64 5.36-5.01 11-9.53 16.8-14 2.97-2.29 5.86-4.66 8.74-7.05 6.34-5.21 12.9-10.1 19.5-15 1.4-1.04 2.8-2.07 4.19-3.11 41.2-30.6 86.4-57 133-78.5 1.08-0.5 2.15-1 3.26-1.51 58.1-27 119-46.4 182-59.5 1.06-0.22 1.06-0.22 2.15-0.45 48.5-10.2 98.1-16 148-15.7 2.74 0.01 5.48 0.01 8.22 0.01 3.34 0 6.68 0.01 10 0.02h3.64c21.2 0.12 21.2 0.12 27.3 2.16 0.33 29 0.67 58.1 1 88 34 0.33 68 0.66 103 1v1052c-326 0.5-326 0.5-659 1-1.32 5.94-2.63 11.9-4 18-6.14 14-15.9 22.5-30 28-7.45 2.4-14.8 2.33-22.5 2.34-1.41 0.01-2.83 0.01-4.24 0.02-2.96 0.01-5.92 0.01-8.88 0.01-3.75 0-7.5 0.03-11.3 0.07-2.92 0.02-5.84 0.02-8.76 0.02-1.38 0-2.77 0.01-4.15 0.03-13.3 0.13-24.5-2.24-35.2-10.5-1.01-0.7-2.02-1.4-3.06-2.12-10.6-9.3-14.2-22.4-15.9-35.9-217-0.33-435-0.66-659-1v-1052h103v-89c10.1-2.53 21-2.16 31.4-2.2zm20.6 51.2c-0.01 78.6-0.03 157-0.04 236v3.52c0 25.2 0 50.5-0.01 75.7v37.1 3.73c0 40-0.01 79.9-0.02 120-0.01 41-0.02 82.1-0.02 123v17.4 3.45c0 18.4-0.01 36.8-0.01 55.2-0.01 18.5-0.01 36.9-0.01 55.4 0 11 0 22-0.01 33v22 12.6 11.4c0 2.03 0 4.05-0.01 6.08 0.01 1.18 0.01 2.37 0.01 3.59v3.11c-0.13 2.26-0.13 2.26 1.12 3.29 3.12 0.26 6.22 0.46 9.34 0.62 2.02 0.11 4.03 0.22 6.04 0.33 1.07 0.06 2.13 0.12 3.24 0.18 95.4 5.3 190 20.9 320 63.9 1.62 0.62 1.62 0.62 3.27 1.24 51.7 19.7 102 43.4 149 73.8 0.95 0.62 1.9 1.24 2.87 1.88 16.7 10.9 33.2 22.1 48.7 34.7 2.71 2.17 5.29 3.94 8.41 5.42 0.12-71.8 0.24-144 0.3-215v-3.22c0.03-23.1 0.04-46.2 0.06-69.2 0.01-11.3 0.02-22.6 0.03-34v-3.41c0.03-36.5 0.08-73 0.15-110 0.07-37.5 0.11-75 0.12-113 0-5.3 0.01-10.6 0.01-15.9v-3.16c0.01-16.8 0.04-33.6 0.08-50.4 0.04-16.9 0.06-33.8 0.05-50.6-0.01-10 0.01-20.1 0.05-30.1 0.03-6.69 0.03-13.4 0.01-20.1-0.01-3.82-0.01-7.64 0.02-11.4 0.03-4.12 0.01-8.23-0.01-12.3 0.01-1.19 0.03-2.37 0.05-3.6-0.08-5.79-0.47-9.35-4.34-13.8-1.17-1.13-2.36-2.25-3.58-3.35-0.67-0.77-1.34-1.55-2.03-2.34-7.04-7.99-14.6-15.5-22.2-23-2.37-2.37-4.73-4.74-7.1-7.11-1.53-1.53-3.06-3.05-4.58-4.58-0.7-0.7-1.4-1.39-2.11-2.11-3.98-3.96-8.05-7.74-12.3-11.4-2.21-1.91-4.37-3.88-6.53-5.85-4.24-3.83-8.59-7.48-13-11.1-2.34-1.9-4.66-3.82-6.96-5.75-9.68-8.1-19.6-15.7-29.8-23.1-2.29-1.66-4.58-3.34-6.86-5.02-10.9-8-22.1-15.5-33.5-22.7-1.28-0.81-1.28-0.81-2.59-1.64-12.1-7.63-24.4-14.9-36.8-21.9-1.69-0.94-3.37-1.9-5.06-2.85-12.3-6.95-24.8-13.3-37.6-19.2-2.94-1.37-5.87-2.75-8.8-4.13-25.8-12.1-52.2-22.1-79.2-31.2-1.2-0.41-2.4-0.82-3.64-1.24-61.5-20.8-126-32.8-191-37.5-0.89-0.06-1.78-0.13-2.7-0.19-2.57-0.19-5.15-0.37-7.72-0.54-0.74-0.05-1.48-0.11-2.25-0.16-4.82-0.31-9.62-0.38-14.4-0.37-1.89 0-1.89 0-3.81 0.01h-2.89zm1116 1.69c-1.08 0.09-2.15 0.18-3.26 0.27-91.9 7.71-181 31.4-292 83.2-2.9 1.57-5.82 3.04-8.78 4.47-19.3 9.35-37.7 20.7-55.6 32.4-0.63 0.42-1.27 0.83-1.93 1.26-4.39 2.87-8.74 5.79-13.1 8.74-0.74 0.51-1.48 1.02-2.25 1.54-19 13.1-37.6 26.9-55.2 41.9-4.06 3.46-8.15 6.85-12.3 10.2-4.24 3.44-8.12 7.09-11.9 11-1.94 1.92-3.92 3.69-5.99 5.46-4.44 3.88-8.62 7.98-12.8 12.2l-2.33 2.33c-1.62 1.62-3.24 3.24-4.85 4.86-2.46 2.46-4.92 4.92-7.38 7.37l-6.95 6.95c-4.04 4.06-7.91 8.21-11.6 12.6-1.1 1.26-2.25 2.47-3.44 3.65-0.3 2.33-0.3 2.33-0.25 5.09-0.01 1.08-0.01 2.17-0.02 3.28 0.01 1.81 0.01 1.81 0.01 3.65 0 1.28 0 2.56-0.01 3.87-0.01 3.57-0.01 7.13 0 10.7 0 3.87-0.01 7.74-0.02 11.6-0.01 6.8-0.02 13.6-0.02 20.4 0 10.1-0.01 20.2-0.03 30.3-0.03 17-0.04 34-0.05 51-0.01 16.8-0.03 33.7-0.05 50.5v3.17c-0.01 5.3-0.01 10.6-0.02 15.9-0.05 37.6-0.08 75.2-0.11 113-0.03 36.6-0.07 73.1-0.11 110v3.41c-0.01 11.3-0.03 22.6-0.04 33.9-0.02 23-0.05 46.1-0.07 69.1 0 1.06-0.01 2.11-0.01 3.21-0.07 70.8-0.13 142-0.2 212 0.66 0.33 1.33 0.66 2 1 0.46-0.34 0.91-0.69 1.38-1.05 4.48-3.44 8.98-6.87 13.5-10.3 1.77-1.35 3.53-2.7 5.29-4.06 72.3-55.1 158-93.3 518-166 0.69-0.04 1.38-0.07 2.09-0.11 1.86-0.1 3.71-0.19 5.57-0.29 2.73-0.07 2.73-0.07 4.77-1.25 0.02-78.4 0.04-157 0.05-235v-3.52c0-25.2 0-50.4 0.01-75.6v-37.1-3.72c0-39.9 0.01-79.8 0.02-120 0.01-41 0.02-82 0.02-123v-17.4-3.45c0-18.4 0.01-36.7 0.01-55.1 0.01-18.4 0.01-36.9 0.01-55.3 0-11 0-21.9 0.01-32.9v-21.9-12.5-11.4c0-2.03 0-4.05 0.01-6.07-0.01-1.19-0.01-2.37-0.01-3.59v-3.11c0.13-2.25 0.13-2.25-1.13-3.29-13-0.73-26.2 0.6-39.2 1.69zm-1219 89.3v950h441c-0.32-0.66-0.66-1.32-1-2-2.53-0.71-4.98-1.26-7.56-1.75-0.84-0.16-1.69-0.32-2.57-0.49-8.07-1.49-16.2-2.73-24.3-3.91-18.6-2.73-37.2-5.66-55.7-8.63-0.66-0.11-1.32-0.21-2.01-0.32-8.2-1.32-16.4-2.64-24.6-3.95-12.4-2-24.8-3.99-37.2-5.97-2-0.32-4-0.65-6-0.97-15.2-2.43-30.3-4.84-45.5-7.19-11.6-1.81-23.2-3.66-34.8-5.52-1.02-0.17-2.05-0.33-3.11-0.5-9.72-1.56-19.4-3.12-29.2-4.69-30.2-4.87-30.2-4.87-60.4-9.47-1.91-0.28-3.82-0.56-5.72-0.84-5.4-0.8-10.8-1.58-16.2-2.33-11.1-1.58-21.9-3.14-29.3-12.5-4.69-6.5-4.8-13.2-4-21 1.49-6.75 6.54-12.6 12.3-16.4 9.37-4.56 19.8-2.03 29.7-0.44 1.72 0.27 3.44 0.54 5.15 0.8 5.12 0.8 10.2 1.62 15.3 2.44 3.83 0.61 7.65 1.22 11.5 1.83 14.7 2.35 29.5 4.71 44.2 7.08 19.1 3.06 38.2 6.1 57.3 9.12 31.4 4.96 62.7 9.95 94 15 33 5.28 66 10.6 99 15.8 1.35 0.22 1.35 0.22 2.72 0.44 20.6 3.28 41.2 6.54 61.9 9.75 1.34 0.21 1.34 0.21 2.71 0.42 8.53 1.32 17.1 2.65 25.6 3.96 3.07 0.47 6.13 0.95 9.2 1.42 1.4 0.22 2.79 0.44 4.19 0.65 11.8 1.81 11.8 1.81 17.6 2.97 0.73 0.14 1.45 0.28 2.2 0.43 1.39 0.28 2.78 0.56 4.17 0.86 3.38 0.67 5.99 1.08 9.26-0.15-3.9-3.33-7.95-5.8-12.4-8.25-1.45-0.8-2.89-1.6-4.34-2.4-1.07-0.59-1.07-0.59-2.17-1.2-2.9-1.62-5.75-3.29-8.62-4.96-14.5-8.31-29.4-15.8-44.4-23.1-1.32-0.64-2.63-1.29-3.95-1.93-7.47-3.65-15-7.03-22.7-10-3.72-1.46-7.37-3.01-11-4.69-56.6-26.2-119-41.6-180-53.4-0.74-0.14-1.49-0.29-2.27-0.44-50.8-9.86-102-15.5-154-18.2-1.14-0.07-2.29-0.13-3.47-0.19-19.5-1.02-39-1.55-58.5-2.13-0.32-258-0.65-517-1-783h-51zm1311 0c-1.24 1.02-1.24 1.02-1.12 3.18v2.95 3.4 3.79 4c0 3.69 0 7.39 0.01 11.1v12c0 7.04 0 14.1 0.01 21.1 0.01 10.5 0.01 20.9 0.01 31.4 0 17.6 0.01 35.2 0.02 52.8 0.01 24 0.02 48 0.02 72.1 0 11.2 0.01 22.4 0.01 33.5v3.39c0.01 26.7 0.02 53.3 0.02 80 0 1.17 0.01 2.34 0.01 3.54 0 17.8 0.01 35.5 0.01 53.3 0.01 18.9 0.02 37.9 0.03 56.8v3.54c0.01 26.6 0.01 53.2 0.02 79.8v3.39c0 11.2 0.01 22.3 0.01 33.5 0 24 0.01 48 0.02 72 0.01 17.5 0.02 35 0.02 52.5 0 10.4 0 20.8 0.01 31.2 0.01 6.94 0.01 13.9 0.01 20.8v11.9c0.01 4.25 0.01 8.5 0.01 12.8v3.78 3.4 2.95c-0.13 2.18-0.13 2.18-1.13 3.18-1.53 0.14-3.07 0.21-4.61 0.25-1 0.03-1.99 0.06-3.01 0.09-1.1 0.03-2.2 0.06-3.32 0.09-2.36 0.07-4.72 0.15-7.07 0.22-1.25 0.04-2.5 0.07-3.79 0.11-71.1 2.14-141 8.7-211 23.2-0.84 0.18-1.68 0.36-2.55 0.54-24.1 5.05-47.9 11-71.5 17.9-1.81 0.53-3.61 1.05-5.42 1.57-31.2 9.09-61.6 20.4-91.5 33-1.65 0.7-1.65 0.7-3.35 1.41-11.5 4.85-22.7 9.94-33.8 15.6-2.48 1.27-4.98 2.51-7.48 3.74-19.9 9.86-39.9 19.9-58.4 32.2v2c6.86-0.7 13.6-1.69 20.4-2.81 1.13-0.18 2.25-0.36 3.42-0.55 2.47-0.4 4.94-0.8 7.42-1.21 6.97-1.14 14-2.27 20.9-3.4 0.74-0.12 1.49-0.24 2.26-0.36 18.1-2.94 36.3-5.81 54.4-8.69 2.69-0.42 5.38-0.85 8.07-1.27 9.32-1.48 18.6-2.95 28-4.43 19.1-3.02 38.2-6.04 57.2-9.06 2.06-0.33 4.11-0.65 6.17-0.98 41.4-6.56 82.9-13.1 124-19.7 5.69-0.9 11.4-1.81 17.1-2.71 7.65-1.22 15.3-2.44 22.9-3.66 2.92-0.46 5.84-0.93 8.76-1.39 15.1-2.4 30.1-4.81 45.2-7.27 2.18-0.35 4.37-0.71 6.55-1.06 1.07-0.18 1.07-0.18 2.15-0.35 1.42-0.23 2.83-0.46 4.24-0.69 3.39-0.55 6.78-1.11 10.2-1.67 3.7-0.6 7.4-1.21 11.1-1.81 1.07-0.18 2.14-0.35 3.24-0.54 25-4.04 25-4.04 34.3 2.28 5.76 4.7 9.19 10.4 10 17.8 0.31 8.11-1.54 14.2-6.85 20.4-7.09 6.71-16.8 7.77-26.1 9.2-1.72 0.27-1.72 0.27-3.48 0.55-3.16 0.5-6.33 1-9.49 1.49-3.4 0.54-6.81 1.08-10.2 1.62-5.88 0.93-11.8 1.86-17.6 2.78-9.32 1.46-18.6 2.94-27.9 4.41-3.18 0.5-6.35 1.01-9.52 1.51-0.79 0.12-1.58 0.25-2.4 0.38-5.64 0.89-11.3 1.78-16.9 2.67-21 3.32-42 6.66-63 10-1.02 0.17-1.02 0.17-2.06 0.33-7.39 1.19-14.8 2.37-22.2 3.56-12.9 2.06-25.7 4.12-38.6 6.18-1.22 0.19-2.43 0.38-3.68 0.58-16 2.56-31.9 5.09-47.9 7.61-0.9 0.14-1.8 0.28-2.72 0.43-8.08 1.27-16.2 2.55-24.2 3.81-18.5 2.9-37 5.91-55.4 9.02v2h442v-950h-51z" fill="#000100"/>
                    </svg>
                  </td>
                  <td>{{  $buku->BukuID }}</td>
                  <td>{{  $buku->Judul }}</td>
                  <td>{{  $buku->Penulis }}</td>
                  <td>{{  $buku->Penerbit }}</td>
                  <td>{{  $buku->TahunTerbit }}</td>
                </tr>
              @endforeach
            </tbody> 
            </table> --}}
              <a href="#">
                <img width="100" height="150" src="storage/image/Don-Quixote-COVER.jpg">
              </a>
            </div>
         <a href="{{url('library')}}" style="text-align:center;">Lihat...</a>
</body>
</html>