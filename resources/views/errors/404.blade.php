@extends('layouts.app')

@section('title', '404: Jalur Tidak Ditemukan - TRAILFORM')
@section('meta_description', 'Halaman atau perlengkapan yang Anda cari tidak ditemukan dalam inventaris TRAILFORM.')

@section('content')
<div class="container py-5 my-5 text-center">
    <div class="max-w-md mx-auto py-5">
        <div class="d-inline-flex align-items-center gap-2 mb-3">
            <span class="tf-badge-tag">ERROR 404</span>
            <span class="small fw-bold text-uppercase" style="color: var(--tf-text-secondary); letter-spacing: 0.08em;">
                Rute Tidak Terdaftar
            </span>
        </div>

        <h1 class="display-4 fw-bold text-white mb-3 text-uppercase" style="letter-spacing: -0.02em;">
            Jalur Tidak Ditemukan
        </h1>

        <p class="lead mb-4 mx-auto" style="color: var(--tf-text-secondary); max-width: 520px; font-size: 1.05rem; line-height: 1.7;">
            Perlengkapan dengan kode tersebut atau tautan halaman yang Anda buka tidak berada dalam daftar inventaris aktif TRAILFORM.
        </p>

        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('camp-gears.index') }}" class="btn btn-tf-primary px-4 py-3">
                Kembali ke Katalog Alat
            </a>
            <a href="{{ route('camp-gears.index') }}#cara-sewa" class="btn btn-tf-outline px-4 py-3">
                Panduan Prosedur
            </a>
        </div>
    </div>
</div>
@endsection
