<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="/"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/contact">Contact</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link text-light" href="/admin">Dashboard</a>
        </li>
        @endauth
      </ul>
      <div class="d-flex align-items-center">
        @guest
          <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
        @endguest
        @auth
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-light">Logout</button>
          </form>
        @endauth
        <form class="d-flex ms-2" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>