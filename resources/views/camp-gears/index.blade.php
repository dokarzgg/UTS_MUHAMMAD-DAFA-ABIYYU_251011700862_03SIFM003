@extends('layouts.app')

@section('title', 'Katalog Sewa Alat Camping dan Outdoor: ALPENWILD')
@section('meta_description', 'Katalog lengkap penyewaan 10 alat camping berkualitas tinggi: tenda dome, carrier, sleeping bag, kursi lipat, cooking set, hingga kompor gas portable di ALPENWILD TRAILFORM.')

@section('styles')
<style>
    /* Hero Section: Alpenwild Atmospheric Panoramic Alpine */
    .tf-hero-section {
        position: relative;
        background-color: var(--tf-bg-lowest);
        border-bottom: 1px solid var(--tf-border);
        overflow: hidden;
    }

    .tf-hero-backdrop {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .tf-hero-backdrop img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 30%;
        opacity: 0.35;
        transform: scale(1.02);
    }

    .tf-hero-scrim-left {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, #0d0e11 0%, rgba(13, 14, 17, 0.95) 45%, rgba(13, 14, 17, 0.6) 80%, rgba(13, 14, 17, 0.2) 100%);
        z-index: 2;
    }

    .tf-hero-scrim-bottom {
        position: absolute;
        inset: 0;
        background: linear-gradient(0deg, #121316 0%, rgba(18, 19, 22, 0.8) 30%, transparent 70%);
        z-index: 2;
    }

    .tf-hero-content {
        position: relative;
        z-index: 3;
    }

    /* Carousel Styling: Alpenwild Sharp Planar Frame */
    .tf-hero-carousel {
        border: 1px solid var(--tf-border);
        background-color: var(--tf-bg-card);
    }

    .tf-hero-carousel .carousel-item {
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s ease;
    }

    .tf-hero-carousel-img {
        width: 100%;
        height: 440px;
        object-fit: cover;
        background-color: var(--tf-bg-lowest);
    }

    .tf-hero-carousel-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(180deg, rgba(13, 14, 17, 0) 0%, rgba(13, 14, 17, 0.95) 40%, #0d0e11 100%);
        padding: 1.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* Field Validation Metrics Bar */
    .tf-metric-bar {
        background-color: var(--tf-bg-lowest);
        border-top: 1px solid var(--tf-border);
        border-bottom: 1px solid var(--tf-border);
    }

    .tf-metric-col {
        border-right: 1px solid var(--tf-border);
        padding: 1.25rem 1.5rem;
    }

    .tf-metric-col:last-child {
        border-right: none;
    }

    /* Catalog Slider Styling */
    .tf-slider-container {
        position: relative;
    }

    .tf-slider-track {
        display: flex;
        gap: 1.25rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        padding: 0.5rem 0.25rem 1.25rem;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
        scrollbar-color: var(--tf-accent) var(--tf-bg-card);
    }

    .tf-slider-track::-webkit-scrollbar {
        height: 4px;
    }

    .tf-slider-track::-webkit-scrollbar-track {
        background: var(--tf-bg-card);
    }

    .tf-slider-track::-webkit-scrollbar-thumb {
        background: var(--tf-accent);
    }

    .tf-slider-item {
        flex: 0 0 calc(25% - 0.95rem);
        scroll-snap-align: start;
        min-width: 270px;
    }

    @media (max-width: 1200px) {
        .tf-slider-item {
            flex: 0 0 calc(33.333% - 0.85rem);
        }
    }

    @media (max-width: 991px) {
        .tf-slider-item {
            flex: 0 0 calc(50% - 0.65rem);
        }
        .tf-metric-col {
            border-right: none;
            border-bottom: 1px solid var(--tf-border);
        }
        .tf-metric-col:last-child {
            border-bottom: none;
        }
    }

    @media (max-width: 576px) {
        .tf-slider-item {
            flex: 0 0 88%;
        }
        .tf-hero-carousel-img {
            height: 330px;
        }
    }

    /* Slider Nav Buttons: Utilitarian Square Controls */
    .btn-tf-nav {
        width: 40px;
        height: 40px;
        background-color: var(--tf-bg-card);
        border: 1px solid var(--tf-border);
        color: var(--tf-text-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.15s ease;
    }

    .btn-tf-nav:hover {
        background-color: var(--tf-text-primary);
        border-color: var(--tf-text-primary);
        color: #000000;
    }
</style>
@endsection

@section('content')
<!-- Hero Section: Alpenwild Atmospheric High-Altitude Exploration -->
<section class="tf-hero-section py-5 py-lg-6">
    <!-- Scenic Alpine Background Image with Scrims -->
    <div class="tf-hero-backdrop">
        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjnINED1Psr1c3Gh_8riBcN3hV_ubBEeab9XEcCg4vRngo_PDvjFq0OrQiOrkFKo3E7BoCvgQn3QMcZGlNwwb5bVb6Nk15lIo6klqx0c1J-lnmXsXJRMLyv6PckLCTvlXxB45vdF14AVPYkk74NeURJ6saXJJ273Xy8BosRzQOge7DPb0yJ6sHPyKKBb2gDvqyiTMFT-U7Mlmz8E1EMwW0HfE1SnVBtBMGM51z_2vgcJFbdUp1dBGN" alt="Alpenwild Mountain Peak" loading="eager">
    </div>
    <div class="tf-hero-scrim-left"></div>
    <div class="tf-hero-scrim-bottom"></div>

    <div class="container py-3 py-lg-4 tf-hero-content">
        <div class="row align-items-center justify-content-between g-5">
            <!-- Hero Left: Tactical Content -->
            <div class="col-lg-7">
                <!-- Status Overline Badge -->
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-1" style="background-color: rgba(13, 14, 17, 0.85); border: 1px solid var(--tf-border);">
                    <span class="d-inline-block" style="width: 6px; height: 6px; background-color: var(--tf-accent);"></span>
                    <span class="tf-mono text-white fw-bold" style="font-size: 0.6875rem; letter-spacing: 0.14em;">
                        ALPINE PERFORMANCE // SYSTEM 04
                    </span>
                </div>
                
                <!-- Display Headline -->
                <h1 class="display-3 fw-bold text-white mb-3 font-display" style="letter-spacing: -0.03em; line-height: 1.05;">
                    GEAR UP.<br>
                    <span style="color: var(--tf-accent);">GET OUT.</span>
                </h1>

                <!-- Subtitle with test assertion anchor text -->
                <p class="lead mb-4 pe-lg-4" style="color: var(--tf-text-secondary); font-size: 1.08rem; line-height: 1.75;">
                    <strong class="text-white">Perlengkapan Outdoor Tangguh, Siap Disewa.</strong> Dirancang untuk menghadapi paparan medan alam bebas dan iklim alpine tanpa kompromi. Layanan persewaan 10 unit peralatan ekspedisi terverifikasi dengan tarif harian transparan.
                </p>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="#katalog" class="btn btn-tf-primary px-4 py-3">
                        Jelajahi Koleksi Alat &darr;
                    </a>
                    <a href="#cara-sewa" class="btn btn-tf-outline px-4 py-3">
                        Prosedur Peminjaman
                    </a>
                </div>
            </div>

            <!-- Hero Right: Planar Rotating Showcase Carousel -->
            <div class="col-lg-5">
                <div class="position-relative">
                    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
                        <span class="tf-mono fw-bold" style="color: var(--tf-text-secondary); font-size: 0.72rem; letter-spacing: 0.12em;">
                            INVENTARIS PILIHAN
                        </span>
                        <span class="tf-badge-stock" style="font-size: 0.6875rem;">
                            AUTO CYCLE
                        </span>
                    </div>

                    <!-- Bootstrap Carousel with Autoplay -->
                    <div id="heroGearCarousel" class="carousel slide carousel-fade tf-hero-carousel" data-bs-ride="carousel" data-bs-interval="4000">
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators mb-2">
                            @foreach($gears as $index => $gear)
                                <button type="button" data-bs-target="#heroGearCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>

                        <!-- Carousel Items Loop -->
                        <div class="carousel-inner">
                            @foreach($gears as $index => $gear)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }} position-relative">
                                    <img src="{{ asset($gear->image) }}" alt="{{ $gear->name }}" class="tf-hero-carousel-img">

                                    <!-- Top Technical Badges -->
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="tf-badge-tag">
                                            [ 0{{ $loop->iteration }} ]
                                        </span>
                                    </div>
                                    <div class="position-absolute top-0 end-0 m-3">
                                        <span class="tf-badge-category">
                                            {{ $gear->category }}
                                        </span>
                                    </div>

                                    <!-- Bottom Info Overlay -->
                                    <div class="tf-hero-carousel-overlay">
                                        <div class="d-flex justify-content-between align-items-end mb-2">
                                            <div>
                                                <div class="tf-mono small" style="color: var(--tf-text-muted); font-size: 0.6875rem;">
                                                    SKU // AW-{{ str_pad($gear->id, 3, '0', STR_PAD_LEFT) }}
                                                </div>
                                                <h3 class="h5 text-white fw-bold mb-1 font-display">{{ $gear->name }}</h3>
                                                <div class="small tf-mono" style="color: var(--tf-text-secondary); font-size: 0.72rem;">
                                                    Ketersediaan: <span class="text-white fw-bold">{{ $gear->stock }} Unit Siap</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="tf-price text-white">
                                                    Rp{{ number_format($gear->rent_price, 0, ',', '.') }}
                                                </div>
                                                <div class="tf-price-period">per hari</div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('camp-gears.show', $gear->id) }}" class="btn btn-tf-primary btn-sm w-100 py-2">
                                                Lihat Spesifikasi Unit &rarr;
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Carousel Navigation Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#heroGearCarousel" data-bs-slide="prev" style="width: 12%; opacity: 0.8;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Sebelumnya</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroGearCarousel" data-bs-slide="next" style="width: 12%; opacity: 0.8;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Berikutnya</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Operational Process Bar: Factual Rental Protocol Strip -->
<div class="tf-metric-bar">
    <div class="container px-0">
        <div class="row g-0">
            <div class="col-lg-4 col-md-4 tf-metric-col d-flex align-items-center gap-3">
                <span class="d-inline-block" style="width: 4px; height: 32px; background-color: var(--tf-accent);"></span>
                <div>
                    <div class="tf-mono text-white fw-bold" style="font-size: 0.85rem; letter-spacing: 0.08em;">10 UNIT EKSPEDISI</div>
                    <div class="small" style="color: var(--tf-text-secondary); font-size: 0.78rem;">Alat outdoor siap sewa dari katalog aktif</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 tf-metric-col d-flex align-items-center gap-3">
                <span class="d-inline-block" style="width: 4px; height: 32px; background-color: var(--tf-border-focus);"></span>
                <div>
                    <div class="tf-mono text-white fw-bold" style="font-size: 0.85rem; letter-spacing: 0.08em;">CEK FISIK PRA-SERAH</div>
                    <div class="small" style="color: var(--tf-text-secondary); font-size: 0.78rem;">Inspeksi kondisi unit bersama teknisi sebelum dipinjam</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 tf-metric-col d-flex align-items-center gap-3">
                <span class="d-inline-block" style="width: 4px; height: 32px; background-color: var(--tf-accent);"></span>
                <div>
                    <div class="tf-mono text-white fw-bold" style="font-size: 0.85rem; letter-spacing: 0.08em;">TARIF FLAT HARIAN</div>
                    <div class="small" style="color: var(--tf-text-secondary); font-size: 0.78rem;">Harga per hari transparan, tanpa biaya tersembunyi</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Catalog Section (Interactive Horizontal Slider with 10 Items) -->
<section id="katalog" class="py-5">
    <div class="container py-3">
        <!-- Section Header with Slider Navigation Controls -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 pb-3 border-bottom gap-3" style="border-color: var(--tf-border) !important;">
            <div>
                <span class="tf-mono small fw-bold" style="color: var(--tf-accent); letter-spacing: 0.14em;">PRIMARY SPECIFICATIONS // 2025 HARVEST</span>
                <h2 class="h3 text-white fw-bold mt-1 mb-1 font-display">Daftar 10 Perlengkapan Camping</h2>
                <p class="small mb-0" style="color: var(--tf-text-secondary);">Inventaris alat ekspedisi alpine terkalibrasi dengan tarif sewa harian transparan.</p>
            </div>

            <!-- Slide Navigation Controls -->
            <div class="d-flex align-items-center gap-2">
                <span class="small me-2 d-none d-sm-inline tf-mono" style="color: var(--tf-text-muted); font-size: 0.72rem;">
                    TOTAL: <strong class="text-white">{{ $gears->count() }} ALAT TERDAFTAR</strong>
                </span>
                <button type="button" class="btn-tf-nav" id="btnSlidePrev" aria-label="Slide sebelumnya" title="Geser ke kiri">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                    </svg>
                </button>
                <button type="button" class="btn-tf-nav" id="btnSlideNext" aria-label="Slide berikutnya" title="Geser ke kanan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                </button>
            </div>
        </div>

        @if($gears->isEmpty())
            <div class="p-5 text-center" style="background-color: var(--tf-bg-card); border: 1px solid var(--tf-border);" role="alert">
                <h5 class="text-white fw-bold font-display">Belum ada perlengkapan yang terdaftar.</h5>
                <p class="text-secondary small mb-0">Silakan jalankan database seeder untuk memuat daftar alat outdoor.</p>
            </div>
        @else
            <!-- Slider Track (Touch/Scroll/Click Slideable) -->
            <div class="tf-slider-container">
                <div class="tf-slider-track" id="gearSliderTrack">
                    @foreach($gears as $gear)
                        <div class="tf-slider-item">
                            <div class="tf-card">
                                <!-- Image Container: Dominant Visual 4:5 -->
                                <div class="tf-card-img-wrapper">
                                    <img src="{{ asset($gear->image) }}" alt="{{ $gear->name }}" class="tf-card-img" loading="lazy">
                                    <span class="position-absolute top-0 start-0 m-2 tf-badge-category">
                                        [ 0{{ $loop->iteration }} ]
                                    </span>
                                    <span class="position-absolute top-0 end-0 m-2 tf-badge-category">
                                        {{ $gear->category }}
                                    </span>
                                    <span class="position-absolute bottom-0 end-0 m-2 tf-mono" style="font-size: 0.65rem; color: var(--tf-text-muted); background: rgba(13, 14, 17, 0.8); padding: 0.15rem 0.4rem;">
                                        SKU // AW-{{ str_pad($gear->id, 3, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>

                                <!-- Card Body: Planar Technical Layout -->
                                <div class="tf-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="tf-badge-stock">
                                            Stok: <strong class="text-white">{{ $gear->stock }}</strong> unit
                                        </span>
                                        <span class="tf-mono small" style="color: var(--tf-accent); font-size: 0.6875rem;">
                                            STATUS // READY
                                        </span>
                                    </div>

                                    <h3 class="h6 text-white fw-bold mb-2 text-truncate font-display" title="{{ $gear->name }}">
                                        {{ $gear->name }}
                                    </h3>

                                    <p class="small mb-3 flex-grow-1" style="color: var(--tf-text-secondary); display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.6;">
                                        {{ $gear->description }}
                                    </p>

                                    <div class="pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between mt-auto">
                                        <div>
                                            <div class="tf-price">
                                                Rp{{ number_format($gear->rent_price, 0, ',', '.') }}
                                            </div>
                                            <div class="tf-price-period">per hari</div>
                                        </div>
                                        <a href="{{ route('camp-gears.show', $gear->id) }}" class="btn btn-tf-outline btn-sm px-3">
                                            Detail &rarr;
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Slider Hint -->
            <div class="d-flex justify-content-between align-items-center mt-2 small px-1 tf-mono" style="color: var(--tf-text-muted); font-size: 0.72rem;">
                <span>&larr; GESER UNTUK MELIHAT PERLENGKAPAN LAINNYA &rarr;</span>
                <span>TOTAL: <strong class="text-white">10 UNIT EKSPEDISI SIAP SEWA</strong></span>
            </div>
        @endif
    </div>
</section>

<!-- How It Works (Field Protocol): Alpenwild Planar Architecture -->
<section id="cara-sewa" class="py-5" style="background-color: var(--tf-bg-card); border-top: 1px solid var(--tf-border); border-bottom: 1px solid var(--tf-border);">
    <div class="container py-3">
        <div class="mb-5">
            <span class="tf-mono small fw-bold" style="color: var(--tf-accent); letter-spacing: 0.14em;">FIELD PROTOCOL // PROSEDUR PEMINJAMAN</span>
            <h2 class="h3 text-white fw-bold mt-1 font-display">Tahapan Persewaan Perlengkapan</h2>
            <p class="small mb-0" style="color: var(--tf-text-secondary); max-width: 600px;">Alur peminjaman terstruktur untuk memastikan setiap peralatan siap digunakan pada ekspedisi Anda.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 h-100 position-relative" style="background-color: var(--tf-bg-main); border: 1px solid var(--tf-border);">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 tf-mono" style="color: var(--tf-accent);">01</span>
                        <span class="tf-badge-category">TAHAP 1</span>
                    </div>
                    <h3 class="h6 text-white fw-bold mb-2 font-display">PILIH PERLENGKAPAN</h3>
                    <p class="small mb-0" style="color: var(--tf-text-secondary); line-height: 1.65;">
                        Tentukan peralatan yang sesuai dengan jenis medan, perkiraan cuaca, dan jumlah anggota ekspedisi Anda dari katalog slider yang tersedia.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 h-100 position-relative" style="background-color: var(--tf-bg-main); border: 1px solid var(--tf-border);">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 tf-mono" style="color: var(--tf-accent);">02</span>
                        <span class="tf-badge-category">TAHAP 2</span>
                    </div>
                    <h3 class="h6 text-white fw-bold mb-2 font-display">VERIFIKASI SPESIFIKASI</h3>
                    <p class="small mb-0" style="color: var(--tf-text-secondary); line-height: 1.65;">
                        Buka lembar spesifikasi teknis untuk memeriksa kapasitas, bahan, kelengkapan komponen, serta ketersediaan stok fisik di basecamp.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 h-100 position-relative" style="background-color: var(--tf-bg-main); border: 1px solid var(--tf-border);">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 tf-mono" style="color: var(--tf-accent);">03</span>
                        <span class="tf-badge-category">TAHAP 3</span>
                    </div>
                    <h3 class="h6 text-white fw-bold mb-2 font-display">SERAH TERIMA BASECAMP</h3>
                    <p class="small mb-0" style="color: var(--tf-text-secondary); line-height: 1.65;">
                        Kunjungi basecamp operasional untuk verifikasi identitas (KTP/KTM), inspeksi fisik bersama teknisi, dan serah terima unit siap pakai.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.getElementById('gearSliderTrack');
        const btnPrev = document.getElementById('btnSlidePrev');
        const btnNext = document.getElementById('btnSlideNext');

        if (track && btnPrev && btnNext) {
            btnPrev.addEventListener('click', function () {
                const scrollAmount = track.clientWidth * 0.75;
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });

            btnNext.addEventListener('click', function () {
                const scrollAmount = track.clientWidth * 0.75;
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
        }
    });
</script>
@endsection


