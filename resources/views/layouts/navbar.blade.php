<ul class="navbar nav nav-underline" style="background-color: rgba(57, 33, 19, 0.6);">
    <div class="container-fluid">
      <li class="nav-item">
        <a class="navbar-brand" href="{{ url('home') }}" style="font-size:30px; font-weight:bold; color:white;"">DL</a>
        <a class="brand-subtitle" href="{{ url('home') }}" style="text-decoration: none; font-weight:bold; color:white;"> => Digital Library </a>
      </li>
      <div class="d-flex">
        <li class="nav-item" style="margin-right: 30px;">
            <a class="nav-link" href="{{url('home')}}" style="color:white;">Home</a>
          </li>
        <li class="nav-item" style="margin-right: 30px;">
            <a class="nav-link" href="{{url('about')}}" style="color:white;">About</a>
          </li>
          <li class="nav-item" style="margin-right: 30px;">
            <a class="nav-link" href="{{url('library')}}" style="color:white;">Library</a>
          </li>
        <li class="nav-item" style="margin-right: 30px;">
          <a class="nav-link" href="{{url('logout')}}" style="color:white;">Logout</a>
        </li>
      </div>
    </div>
  </ul>