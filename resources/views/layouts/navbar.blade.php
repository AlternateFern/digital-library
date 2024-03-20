<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav>
  <a href="{{ url('home') }}">Home</a>
  <a href="{{ url('library') }}">Library</a>
  @if (in_array(Auth::user()->role, ['admin', 'petugas']))
    <a href="{{ url('list_peminjaman') }}">List Peminjaman</a>
  @endif
  <a id="profile" href="{{ url('profil') }}">Profile</a>
</nav>