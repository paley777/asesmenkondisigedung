<style>
    .logo-container {
        margin-right: 10px;
        /* Jarak antara logo dan teks */
    }

    .text-container {
        flex-grow: 1;
        /* Membuat teks mengisi sisa ruang yang tersedia */
    }
</style>
<nav class="navbar navbar-expand-md fixed-top bg-primary navbar-shrink py-3 navbar-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/dashboard">
            <div class="logo-container">
                <img src="{{ URL::asset('images/logo.png') }}" width="64" height="64" class="card-img-top"
                    alt="Logo Universitas Bengkulu">
            </div>
            <div class="text-container">
                <span class="pulse animated" style="font-size: 10pt;">Dashboard | AKBGS</span>
            </div>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/dashboard">Beranda</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $active === 'olah_data' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/dashboard/sekolah">Data Sekolah</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $active === 'gambar' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/dashboard/gambar">Foto Penelitian</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $active === 'peta' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/dashboard/peta">Pemetaan 3D</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
