<nav class="navbar navbar-expand-lg navbar-light style="background-color: ">
    <p class="navbar-brand" style="color: white;">....<p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('manuscripts.index')}}">Manuscript List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('manuscripts.showSearchForm') }}">Search Manuscripts</a>
          </li>
          @guest
              
          @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/admin/login">Admin Panel</a>
            <a class="dropdown-item" href="{{ route('manuscripts.create') }}">Create New Manuscript</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
            @csrf
            </form>
          </div>
          @endguest
        </li>
      </ul>
    </div>
  </nav>