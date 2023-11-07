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
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/">
            <div class="logo-container">
                <img src="{{ URL::asset('images/logo.png') }}" width="50" height="50" class="card-img-top"
                    alt="Logo Universitas Bengkulu">
            </div>
            <div class="text-container">
                <span class="pulse animated" style="font-size: 9pt;">Asesmen Kondisi Bangunan Gedung Sekolah</span>
            </div>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/">Beranda</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $active === 'tentang' ? 'active' : '' }}" data-bss-hover-animate="pulse"
                        href="/tentang">Tentang</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $active === 'asesmen' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/asesmen">Penilaian Kerusakan Sekolah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
