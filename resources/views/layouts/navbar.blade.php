<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav>
  <a href="{{ url('home') }}">Home</a>
  <a href="{{ url('library') }}">Library</a>
  <a href="{{ url('home') }}">Trending</a>
  <a href="{{ url('home') }}">About</a>
  <a href="{{ url('profil') }}">Profile</a>
  <a id="logout" href="@if (in_array(Auth::user()->role, ['admin', 'petugas']))
                {{ url('admin/logout') }}
                @else
                    {{ url('logout') }}
                @endif">Logout</a>
</nav>