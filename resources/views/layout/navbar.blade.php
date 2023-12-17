<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h3>{{ $judul }}</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">

                @if (session()->get('role') == 'Admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kendaraan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="petugas-masuk">Parkir Masuk</a></li>
                            <li><a class="dropdown-item" href="lihatkeluar">Keluar Parkir</a></li>
                            <li><a class="dropdown-item" href="kendaraan">Ruangan Parkir</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Laporan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="laporan">Laporan Parkir</a></li>
                        </ul>
                    </li>
                @endif


                <li><a href="/login" class="btn btn-danger" onClick="return confirm ('Yakin?')">Logout</a></li>
                </li>
            </ul>
        </div>
    </div>
</nav>
