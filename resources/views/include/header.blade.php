{{-- Navbar-section --}}

<section class="navbar-section">
<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <div class="container">
    <div class="image-logo">
      <a href="{{ route('login.auth') }}">
        <img src="{{ asset('/img/icon-1.png') }}" class="image-logo" alt="">
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active menu-text" href="{{ route('panduan.view') }}">Panduan belajar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-text" href="#">Bidang belajar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-text" href="{{ route('kelas.view') }}">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-text" href="{{ route('hubungi.view') }}">Hubungi kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>