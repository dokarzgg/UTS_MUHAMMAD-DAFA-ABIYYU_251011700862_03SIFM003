<footer class="tf-footer">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <!-- Brand & Identification -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://lh3.googleusercontent.com/aida/AEtjO1UZlv-ljOYCsuvrP7QaP6NyFDmaeet8mgUqRKc2JwOa2SM10WAB9hjYlSQpKjCFWaTNKsQkunm8rdjmqcpVgp6urKMkS2oSfEWvSoPddVrTWAZkG-V42o-DkwTcZyFUuJSMLbETFTQ_8Cl-6htEkItc-vHUh8aOyq23Ug8kq3fIKGMNqGoMqrd22jrWBKo2S7okRTMiUDQ1_j-aBRNIcgkyq4_vu8tyHX7udAsWISCd6iZJShOmWIZnvUo" alt="ALPENWILD Logo" style="height: 22px; width: auto; object-fit: contain;" class="me-2">
                    <span class="tf-brand-text text-white fs-5">ALPENWILD</span>
                </div>
                <p class="small mb-3 pe-lg-4" style="color: var(--tf-text-secondary); line-height: 1.7;">
                    Precision-engineered technical gear built for high alpine expeditions and untamed wilderness. Seluruh unit terawat dan melalui inspeksi fisik berkala sebelum diserahkan.
                </p>
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="tf-badge-category">CEK FISIK // PRA-SERAH</span>
                    <span class="tf-badge-category">TARIF TRANSPARAN</span>
                </div>
                <div class="small tf-mono" style="color: var(--tf-text-muted); font-size: 0.72rem;">
                    PROYEK UTS REKAYASA WEB &middot; NIM: <strong class="text-white">251011700862</strong>
                </div>
            </div>

            <!-- Categories -->
            <div class="col-lg-2 col-md-3 col-6">
                <h6 class="text-white fw-bold mb-3 small tf-mono" style="letter-spacing: 0.12em;">KATEGORI ALAT</h6>
                <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                    <li><a href="{{ route('camp-gears.index') }}#katalog" class="text-secondary text-decoration-none hover-white">&bull; Tenda Dome</a></li>
                    <li><a href="{{ route('camp-gears.index') }}#katalog" class="text-secondary text-decoration-none hover-white">&bull; Tas Carrier</a></li>
                    <li><a href="{{ route('camp-gears.index') }}#katalog" class="text-secondary text-decoration-none hover-white">&bull; Sleeping Bag</a></li>
                    <li><a href="{{ route('camp-gears.index') }}#katalog" class="text-secondary text-decoration-none hover-white">&bull; Meja &amp; Kursi</a></li>
                </ul>
            </div>

            <!-- Standards -->
            <div class="col-lg-3 col-md-3 col-6">
                <h6 class="text-white fw-bold mb-3 small tf-mono" style="letter-spacing: 0.12em;">STANDAR SERVIS</h6>
                <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                    <li><span class="text-secondary">&#10003; Cek Frame &amp; Waterproofing</span></li>
                    <li><span class="text-secondary">&#10003; Sterilisasi Fabric &amp; Pasak</span></li>
                    <li><span class="text-secondary">&#10003; Verifikasi Unit Sebelum Serah</span></li>
                    <li><span class="text-secondary">&#10003; Panduan Praktis Lapangan</span></li>
                </ul>
            </div>

            <!-- Basecamp Info -->
            <div class="col-lg-3 col-md-12">
                <h6 class="text-white fw-bold mb-3 small tf-mono" style="letter-spacing: 0.12em;">LOGISTIK &amp; BASECAMP</h6>
                <p class="small mb-2" style="color: var(--tf-text-secondary); line-height: 1.6;">
                    Pengambilan dan pengembalian unit dilakukan langsung di basecamp operasional dengan konfirmasi identitas valid.
                </p>
                <div class="p-2 border border-secondary border-opacity-25" style="background-color: var(--tf-bg-card);">
                    <div class="tf-mono small" style="color: var(--tf-accent); font-size: 0.72rem;">SISTEM SEWA HARIAN</div>
                    <div class="small text-white">Tarif flat transparan 24 jam</div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-top border-secondary border-opacity-25 mt-4 pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center small" style="color: var(--tf-text-muted);">
            <div>
                &copy; {{ date('Y') }} <strong class="text-white">ALPENWILD // TRAILFORM Outdoor</strong>. Hak cipta dilindungi.
            </div>
            <div class="mt-2 mt-md-0 tf-mono" style="font-size: 0.72rem;">
                <span>PLATFORM REKAYASA WEB LARAVEL 13 &amp; BOOTSTRAP 5</span>
            </div>
        </div>
    </div>
</footer>
