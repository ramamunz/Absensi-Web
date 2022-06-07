<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3d597c;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/LogoV2.png" alt="Logo" width="250" height="55">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item {{ $title == 'User' ? 'active' : '' }}">
                    <a class="nav-link" href="/user">Data Pegawai</a>
                </li>
                <li class="nav-item {{ $title == 'Rekap' ? 'active' : '' }}">
                    <a class="nav-link" href="/rekap">Rekap Absensi</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn nav-link">
                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                        </button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active" href="/"><i class="bi bi-person-circle"></i> Login</a>
                </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>