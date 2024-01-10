{{-- detail laporan --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Perpustakaan Digital / Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <script src="{{ asset('js/refresh.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
        html, body {
            background-color: rgb(71, 48, 22);
            background-image: url("storage/image/The_Library.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            
        }
    </style>
</head>
<body>
         @include('layouts.navbar')
         <p>{{ auth()->user()->username }}</p>
         <div class="container mt-3" style="position: fixed;top: 30%;left: 50%;transform: translate(-50%, -50%);">
          <h2 id="typing-text" style="-webkit-text-stroke: 1px rgb(255, 217, 0); text-shadow: 0px 1px 1.8px rgb(255, 217, 0); text-align:center;"></h2>
         </div>
         <div class="container mt-3" style="position: fixed;top: 40%;left: 50%;transform: translate(-50%, -50%);">
         <a class="btn btn-sm btn-warning" href="{{url('library')}}" style="text-align:center;">Lihat List Buku</a>
         </div>
         <div class="blur" style="width: 40%; top: 32%;"></div>
         
          <script>
            document.addEventListener('DOMContentLoaded', function () {
                const words = ['Selamat Datang di Perpus Online', 'Welcome to The Library']; 
                const typingElement = document.getElementById('typing-text');
                let currentWordIndex = 0;

                function typeNextWord() {
                    const currentWord = words[currentWordIndex];
                    let currentIndex = 0;
                    const interval = setInterval(function () {
                        if (currentIndex < currentWord.length) {
                            typingElement.textContent = currentWord.substring(0, currentIndex + 1);
                            currentIndex++;
                        } else {
                            clearInterval(interval);
                            setTimeout(eraseCurrentWord, 2000); // Wait time before erasing word
                        }
                    }, 20); // Typing speed 
                }

                function eraseCurrentWord() {
                    let currentIndex = words[currentWordIndex].length;
                    const interval = setInterval(function () {
                        if (currentIndex >= 0) {
                            typingElement.textContent = words[currentWordIndex].substring(0, currentIndex);
                            currentIndex--;
                        } else {
                            clearInterval(interval);
                            currentWordIndex = (currentWordIndex + 1) % words.length;
                            setTimeout(typeNextWord, 500); // Wait for half a second before typing the next word
                        }
                    }, 25); // Erasing speed
                }

                // Start
                typeNextWord();
            });
          </script>
</body>
</html>