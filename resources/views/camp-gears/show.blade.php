@extends('layouts.app')

@section('title', $gear->name . ': Detail Sewa TRAILFORM')
@section('meta_description', 'Sewa ' . $gear->name . ' kategori ' . $gear->category . ' dengan tarif Rp' . number_format($gear->rent_price, 0, ',', '.') . ' per hari di TRAILFORM.')

@section('content')
<div class="container py-4 py-lg-5">
    <!-- Breadcrumb & Back navigation: Clean technical navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb mb-0 small text-uppercase" style="letter-spacing: 0.06em;">
            <li class="breadcrumb-item"><a href="{{ route('camp-gears.index') }}" class="text-secondary text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('camp-gears.index') }}#katalog" class="text-secondary text-decoration-none">Inventaris Alat</a></li>
            <li class="breadcrumb-item active text-white fw-bold" aria-current="page">{{ $gear->name }}</li>
        </ol>
    </nav>

    <div class="mb-4">
        <a href="{{ route('camp-gears.index') }}#katalog" class="btn btn-tf-outline btn-sm px-3 d-inline-flex align-items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            Kembali ke Katalog
        </a>
    </div>

    <!-- Product Detail Container: High-Impact Technical Sheet -->
    <div class="row g-4 g-lg-5 align-items-start">
        <!-- Left: Product Image Showcase (Dominant Photo) -->
        <div class="col-lg-6 col-12">
            <div class="overflow-hidden position-relative" style="background-color: var(--tf-bg-card); border: 1px solid var(--tf-border);">
                <div class="position-relative" style="aspect-ratio: 4/3; width: 100%; overflow: hidden; background-color: #08090a;">
                    <img src="{{ asset($gear->image) }}" alt="{{ $gear->name }}" class="w-100 h-100" style="object-fit: cover;">
                </div>
                <div class="p-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25" style="background-color: #0d0f11;">
                    <span class="tf-badge-category">
                        Kategori: {{ $gear->category }}
                    </span>
                    <span class="small fw-semibold d-flex align-items-center gap-2" style="color: #4ade80;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                            <path d="M5.5 8a.5.5 0 0 1 .707 0L8 9.793l2.793-2.793a.5.5 0 1 1 .707.707l-3.147 3.146a.5.5 0 0 1-.708 0l-2-2A.5.5 0 0 1 5.5 8"/>
                            <path d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.464 9.99 1.579 2.062 3.483 3.09 4.395 3.32.912-.23 2.816-1.258 4.395-3.32 1.677-2.195 3.06-5.513 2.464-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m0 1.072c.657 0 1.75.252 2.808.538.995.27 2.008.59 2.583.774a.04.04 0 0 1 .03.037c.563 4.225-.71 7.279-2.222 9.255C9.97 13.34 8.447 14.2 8 14.4c-.447-.2-1.97-.86-3.2-.272-1.512-1.976-2.785-5.03-2.222-9.255a.04.04 0 0 1 .03-.037c.575-.184 1.588-.504 2.583-.774C6.25 1.324 7.343 1.072 8 1.072"/>
                        </svg>
                        Fisik Lolos Uji Kelaikan
                    </span>
                </div>
            </div>
        </div>

        <!-- Right: Technical Details & Specifications -->
        <div class="col-lg-6 col-12">
            <div class="p-4 p-lg-5" style="background-color: var(--tf-bg-card); border: 1px solid var(--tf-border);">
                <!-- Category & Identifier Badges -->
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="tf-badge-tag">
                        #TF-{{ str_pad($gear->id, 4, '0', STR_PAD_LEFT) }}
                    </span>
                    <span class="tf-badge-category">
                        {{ $gear->category }}
                    </span>
                    <span class="tf-badge-stock ms-auto">
                        Stok Fisik: <strong class="text-white">{{ $gear->stock }} unit</strong>
                    </span>
                </div>

                <!-- Product Title (H1) -->
                <h1 class="h2 text-white fw-bold mb-3 text-uppercase" style="letter-spacing: -0.01em;">
                    {{ $gear->name }}
                </h1>

                <!-- Rental Price Bar: Crisp & High Contrast -->
                <div class="p-3 mb-4 d-flex align-items-baseline gap-2" style="background-color: var(--tf-bg-main); border: 1px solid var(--tf-border);">
                    <span class="small text-uppercase fw-semibold" style="color: var(--tf-text-secondary); letter-spacing: 0.05em;">Tarif Sewa:</span>
                    <span class="fs-2 fw-bold text-white">Rp{{ number_format($gear->rent_price, 0, ',', '.') }}</span>
                    <span class="small" style="color: var(--tf-text-muted);">/ hari (24 jam)</span>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <h2 class="h6 text-uppercase fw-bold mb-2" style="color: var(--tf-text-muted); letter-spacing: 0.1em; font-size: 0.78rem;">
                        Deskripsi Perlengkapan
                    </h2>
                    <p class="mb-0" style="color: var(--tf-text-secondary); line-height: 1.7; font-size: 0.98rem;">
                        {{ $gear->description }}
                    </p>
                </div>

                <!-- Specifications Table: Technical Spec Matrix -->
                <div class="mb-4">
                    <h2 class="h6 text-uppercase fw-bold mb-3" style="color: var(--tf-text-muted); letter-spacing: 0.1em; font-size: 0.78rem;">
                        Matriks Spesifikasi Teknis
                    </h2>
                    <div class="table-responsive">
                        <table class="table table-dark table-borderless small mb-0" style="background-color: transparent;">
                            <tbody>
                                <tr class="border-bottom border-secondary border-opacity-25">
                                    <td class="ps-0 py-2" style="color: var(--tf-text-secondary); width: 45%;">Kode Inventaris</td>
                                    <td class="text-white fw-bold py-2">#TF-{{ str_pad($gear->id, 4, '0', STR_PAD_LEFT) }}</td>
                                </tr>
                                <tr class="border-bottom border-secondary border-opacity-25">
                                    <td class="ps-0 py-2" style="color: var(--tf-text-secondary);">Kategori Alat</td>
                                    <td class="text-white fw-bold py-2">{{ $gear->category }}</td>
                                </tr>
                                <tr class="border-bottom border-secondary border-opacity-25">
                                    <td class="ps-0 py-2" style="color: var(--tf-text-secondary);">Ketersediaan Fisik</td>
                                    <td class="text-white fw-bold py-2">{{ $gear->stock }} Unit Siap Dipakai</td>
                                </tr>
                                <tr class="border-bottom border-secondary border-opacity-25">
                                    <td class="ps-0 py-2" style="color: var(--tf-text-secondary);">Durasi Sewa Minimal</td>
                                    <td class="text-white fw-bold py-2">1 Hari (24 Jam)</td>
                                </tr>
                                <tr>
                                    <td class="ps-0 py-2" style="color: var(--tf-text-secondary);">Standar Kondisi</td>
                                    <td class="text-white fw-bold py-2 text-success">Bersih, Steril dan Utuh</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Action Button: Informative Prosedur Sewa Trigger -->
                <div class="d-grid gap-2 pt-2">
                    <button type="button" class="btn btn-tf-primary btn-lg py-3" data-bs-toggle="modal" data-bs-target="#bookingInfoModal">
                        Sewa Perlengkapan Ini
                    </button>
                    <small class="text-center mt-1" style="color: var(--tf-text-muted); font-size: 0.78rem;">
                        *Reservasi merupakan demonstrasi katalog. Pengambilan unit dilakukan langsung di basecamp.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Informative Booking Simulator (Per Assignment Rules: informative placeholder CTA) -->
<div class="modal fade" id="bookingInfoModal" tabindex="-1" aria-labelledby="bookingInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--tf-bg-card); border: 1px solid var(--tf-border); color: var(--tf-text-primary);">
            <div class="modal-header border-secondary border-opacity-25">
                <h5 class="modal-title fw-bold text-white d-flex align-items-center gap-2" id="bookingInfoModalLabel">
                    <span class="d-inline-block" style="width: 4px; height: 18px; background-color: var(--tf-accent);"></span>
                    Prosedur Pengambilan Perlengkapan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body py-4">
                <div class="p-3 mb-3" style="background-color: var(--tf-bg-main); border: 1px solid var(--tf-border);">
                    <div class="fw-bold text-white mb-1">{{ $gear->name }}</div>
                    <div class="small" style="color: var(--tf-text-secondary);">
                        Tarif: Rp{{ number_format($gear->rent_price, 0, ',', '.') }} / hari &middot; Kategori: {{ $gear->category }}
                    </div>
                </div>

                <div class="p-3 mb-3 border border-secondary border-opacity-25" style="background-color: rgba(255, 255, 255, 0.03);" role="note">
                    <strong class="text-white d-block mb-1" style="font-size: 0.85rem;">Catatan Demonstrasi Katalog:</strong>
                    <span class="small" style="color: var(--tf-text-secondary); line-height: 1.6;">
                        Sesuai spesifikasi proyek tugas UTS Rekayasa Web, sistem ini mengimplementasikan katalog dan lembar informasi teknis produk. Tombol ini merupakan <em>call-to-action informatif</em>.
                    </span>
                </div>

                <h6 class="text-white fw-bold small text-uppercase mb-2" style="letter-spacing: 0.08em;">Langkah Pengambilan Unit:</h6>
                <ol class="small ps-3 mb-0" style="color: var(--tf-text-secondary); line-height: 1.8;">
                    <li>Kunjungi basecamp persewaan TRAILFORM.</li>
                    <li>Sebutkan kode alat atau nama unit: <strong>{{ $gear->name }}</strong>.</li>
                    <li>Lakukan verifikasi identitas (KTP atau KTM) dan cek kelengkapan fisik bersama teknisi.</li>
                </ol>
            </div>
            <div class="modal-footer border-secondary border-opacity-25">
                <button type="button" class="btn btn-tf-primary px-4" data-bs-dismiss="modal">Mengerti</button>
            </div>
        </div>
    </div>
</div>
@endsection
