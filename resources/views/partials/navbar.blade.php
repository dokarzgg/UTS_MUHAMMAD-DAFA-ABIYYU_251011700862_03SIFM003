<!-- Alpenwild Top Status Ribbon -->
<div class="py-2 border-bottom d-none d-md-block" style="background-color: var(--tf-bg-lowest); border-color: var(--tf-border) !important;">
    <div class="container d-flex justify-content-between align-items-center tf-mono" style="font-size: 0.6875rem; letter-spacing: 0.12em; color: var(--tf-text-secondary);">
        <div class="d-flex align-items-center">
            <span class="d-inline-block me-2" style="width: 6px; height: 6px; background-color: var(--tf-accent);"></span>
            <span>EXPEDITION SEASON 2025 // SISTEM SEWA ALAT LAPANGAN</span>
        </div>
        <div>
            <span class="text-white fw-bold">STANDAR UJI FISIK TINGGI</span> &middot; BASIS LOGISTIK TERVERIFIKASI
        </div>
    </div>
</div>

<!-- Main Tactical Navbar -->
<nav class="navbar navbar-expand-lg tf-navbar">
    <div class="container">
        <!-- Brand Logo / Alpenwild Technical Identity -->
        <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ route('camp-gears.index') }}">
            <img src="https://lh3.googleusercontent.com/aida/AEtjO1UZlv-ljOYCsuvrP7QaP6NyFDmaeet8mgUqRKc2JwOa2SM10WAB9hjYlSQpKjCFWaTNKsQkunm8rdjmqcpVgp6urKMkS2oSfEWvSoPddVrTWAZkG-V42o-DkwTcZyFUuJSMLbETFTQ_8Cl-6htEkItc-vHUh8aOyq23Ug8kq3fIKGMNqGoMqrd22jrWBKo2S7okRTMiUDQ1_j-aBRNIcgkyq4_vu8tyHX7udAsWISCd6iZJShOmWIZnvUo" alt="ALPENWILD Logo" style="height: 24px; width: auto; object-fit: contain;" class="me-2">
            <span class="tf-brand-text text-white fs-4">ALPENWILD</span>
            <span class="ms-2 tf-badge-category d-none d-sm-inline-block">TRAILFORM SERIES</span>
        </a>

        <!-- Mobile Hamburger Toggler -->
        <button class="navbar-toggler border-0 shadow-none text-white p-1" type="button" data-bs-toggle="collapse" data-bs-target="#trailformNavbar" aria-controls="trailformNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="trailformNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') || request()->routeIs('camp-gears.index') ? 'active' : '' }}" href="{{ route('camp-gears.index') }}">
                        Katalog Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('camp-gears.index') }}#cara-sewa">
                        Panduan Sewa
                    </a>
                </li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a href="{{ route('camp-gears.index') }}#katalog" class="btn btn-tf-primary btn-sm px-3 py-2">
                        Jelajahi Alat
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
