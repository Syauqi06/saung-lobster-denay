<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageTitle = $site['name'] . ' — Profil Budidaya Lobster';
$pageDescription = $site['description'];

$missingLocationInfo = [];
if (empty($site['address'])) {
    $missingLocationInfo[] = 'alamat lengkap';
}
if (empty($site['hours'])) {
    $missingLocationInfo[] = 'jam kunjungan';
}

require __DIR__ . '/includes/header.php';
?>

<!-- =========================================================
     HERO
========================================================== -->
<section class="hero" id="beranda" aria-labelledby="hero-title">
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow eyebrow-light">Profil usaha budidaya lobster</p>
            <h1 id="hero-title">Saung Lobster <em>Denay Farm</em></h1>
            <p class="hero-tagline"><?= e($site['tagline']) ?></p>
            <p class="hero-desc">
                Sebuah ruang untuk mengenal lebih dekat Saung Lobster Denay Farm —
                dari profil usaha dan kegiatan budidaya hingga dokumentasi suasana lokasi.
            </p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="#tentang">
                    Jelajahi Farm
                    <?= icon('arrow-down') ?>
                </a>
                <a class="btn btn-ghost" href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener noreferrer">
                    Lihat Lokasi
                    <?= icon('pin') ?>
                </a>
            </div>

            <a class="hero-note" href="#lokasi">
                <?= icon('map') ?>
                <span>Lokasi farm dapat dilihat melalui Google Maps</span>
            </a>
        </div>

        <div class="hero-visual">
            <span class="hero-orbit" aria-hidden="true"></span>

            <figure class="hero-photo">
                <img src="assets/images/hero-lobster.jpg"
                     alt="Tampak dekat lobster dengan corak warna alami dan antena panjang"
                     width="1024" height="683" fetchpriority="high" decoding="async">
                <figcaption class="media-tag hero-tag">Foto ilustrasi</figcaption>
            </figure>

            <figure class="hero-thumb">
                <img src="assets/images/gallery/gallery-06.jpg"
                     alt="Kolam budidaya dikelilingi tanaman hijau"
                     width="1000" height="750" loading="lazy" decoding="async">
            </figure>

            <a class="hero-card" href="#lokasi">
                <span class="hero-card-icon"><?= icon('pin') ?></span>
                <span class="hero-card-text">
                    <strong>Temukan farm</strong>
                    <small>Lihat peta &amp; lokasi</small>
                </span>
                <?= icon('arrow-up-right') ?>
            </a>
        </div>
    </div>

    <a class="hero-scroll" href="#tentang" aria-label="Gulir ke bagian Tentang Kami">
        <span aria-hidden="true"></span>
        Gulir
    </a>

    <svg class="hero-wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false">
        <path d="M0 64c240 46 480-54 720-24s480 70 720 20v60H0V64Z" fill="#FBF7EF"/>
    </svg>
</section>

<!-- =========================================================
     TENTANG KAMI
========================================================== -->
<section class="section about" id="tentang" aria-labelledby="tentang-title">
    <div class="container about-grid">
        <div class="about-media reveal">
            <figure class="about-main">
                <img src="assets/images/about-pond.jpg"
                     alt="Ilustrasi kolam budidaya dikelilingi pepohonan dan tanaman pisang"
                     width="1000" height="750" loading="lazy" decoding="async">
                <figcaption class="media-tag">Foto ilustrasi</figcaption>
            </figure>
            <figure class="about-small">
                <img src="assets/images/about-tank.jpg"
                     alt="Ilustrasi lobster di dalam wadah pemeliharaan"
                     width="800" height="601" loading="lazy" decoding="async">
            </figure>
        </div>

        <div class="about-copy reveal reveal-delay-1">
            <p class="eyebrow">Tentang Kami</p>
            <h2 class="section-title" id="tentang-title">Mengenal Saung Lobster Denay Farm</h2>

            <p class="about-lead">
                Saung Lobster Denay Farm adalah tempat budidaya lobster yang menjadi
                fokus halaman profil ini.
            </p>
            <p>
                Halaman ini disusun untuk memperkenalkan usaha, memberikan gambaran
                mengenai kegiatan budidaya lobster, serta menampilkan dokumentasi
                lokasi dan fasilitas. Informasi disajikan secara sederhana agar mudah
                dipahami oleh pengunjung yang baru mengenal budidaya lobster.
            </p>
            <p>
                Halaman ini berupaya menampilkan informasi secara terbuka: hal-hal yang
                bersifat edukatif umum dibedakan dari informasi operasional yang masih
                memerlukan konfirmasi pengelola.
            </p>

            <p class="about-commitment">
                <strong>Komitmen halaman ini:</strong> menyajikan informasi secara jujur,
                menandai data yang belum tersedia, dan memperbaruinya setelah dikonfirmasi
                oleh pengelola.
            </p>

            <ul class="about-features">
                <li>
                    <span class="feature-icon"><?= icon('profile') ?></span>
                    <div>
                        <strong>Profil yang jelas</strong>
                        <span>Memperkenalkan identitas dan kegiatan usaha secara ringkas.</span>
                    </div>
                </li>
                <li>
                    <span class="feature-icon"><?= icon('camera') ?></span>
                    <div>
                        <strong>Dokumentasi visual</strong>
                        <span>Menampilkan foto lokasi, fasilitas, dan aktivitas budidaya.</span>
                    </div>
                </li>
                <li>
                    <span class="feature-icon"><?= icon('shield') ?></span>
                    <div>
                        <strong>Informasi bertahap</strong>
                        <span>Menandai informasi yang masih perlu dilengkapi agar tidak menyesatkan.</span>
                    </div>
                </li>
            </ul>

            <div class="note">
                <span class="note-icon"><?= icon('info') ?></span>
                <div>
                    <h3>Informasi yang masih perlu dilengkapi</h3>
                    <p>
                        Tahun berdiri, nama pengelola, jenis lobster yang dibudidayakan,
                        kapasitas produksi, dan sertifikasi belum tersedia. Bagian ini
                        sengaja tidak diisi dengan asumsi.
                    </p>
                    <div class="note-chips" aria-label="Daftar informasi yang belum tersedia">
                        <span class="chip">Tahun berdiri</span>
                        <span class="chip">Pengelola</span>
                        <span class="chip">Jenis lobster</span>
                        <span class="chip">Kapasitas</span>
                        <span class="chip">Sertifikasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     BUDIDAYA
========================================================== -->
<section class="section budidaya" id="budidaya" aria-labelledby="budidaya-title">
    <div class="container">
        <div class="budidaya-head reveal">
            <div>
                <p class="eyebrow eyebrow-light">Budidaya</p>
                <h2 class="section-title" id="budidaya-title">Mengenal kegiatan budidaya lobster</h2>
            </div>
            <div class="budidaya-intro">
                <p class="section-lead">
                    Budidaya lobster mencakup rangkaian kegiatan yang saling berkaitan:
                    menyiapkan wadah, menjaga kualitas air, memberikan pakan, dan
                    memantau kesehatan hewan. Bagian ini memberikan gambaran umum,
                    bukan panduan teknis resmi.
                </p>
                <span class="edu-badge"><?= icon('book') ?> Edukasi umum</span>
            </div>
        </div>

        <div class="edu-grid">
            <?php foreach ($eduCards as $index => $card): ?>
                <article class="edu-card reveal">
                    <span class="edu-num" aria-hidden="true"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <span class="edu-icon"><?= icon($card['icon']) ?></span>
                    <h3><?= e($card['title']) ?></h3>
                    <p><?= e($card['text']) ?></p>
                    <span class="tag">Edukasi umum</span>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="process reveal">
            <figure class="process-media">
                <img src="assets/images/gallery/gallery-09.jpg"
                     alt="Ilustrasi deretan kolam budidaya dengan peralatan aerasi"
                     width="1000" height="667" loading="lazy" decoding="async">
                <figcaption class="media-tag">Foto ilustrasi</figcaption>
            </figure>

            <div class="process-body">
                <p class="eyebrow eyebrow-light">Alur umum</p>
                <h3>Empat tahap budidaya</h3>

                <ol class="process-steps">
                    <li class="step">
                        <span class="step-num">1</span>
                        <strong>Persiapan wadah</strong>
                        <p>Membersihkan kolam atau bak dan memastikan sistem air siap digunakan.</p>
                    </li>
                    <li class="step">
                        <span class="step-num">2</span>
                        <strong>Penebaran benih</strong>
                        <p>Memasukkan lobster dengan kepadatan dan cara yang sesuai.</p>
                    </li>
                    <li class="step">
                        <span class="step-num">3</span>
                        <strong>Pemeliharaan</strong>
                        <p>Pakan, kualitas air, dan kesehatan dipantau setiap hari.</p>
                    </li>
                    <li class="step">
                        <span class="step-num">4</span>
                        <strong>Panen &amp; evaluasi</strong>
                        <p>Hasil panen dicatat untuk mengevaluasi performa budidaya.</p>
                    </li>
                </ol>

                <p class="process-note">
                    Tahapan ini merupakan ilustrasi edukatif umum. Detail praktik di
                    Saung Lobster Denay Farm belum diverifikasi dan tidak ditampilkan
                    sebagai fakta operasional.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     GALERI
========================================================== -->
<section class="section galeri" id="galeri" aria-labelledby="galeri-title">
    <div class="container">
        <div class="galeri-head reveal">
            <div>
                <p class="eyebrow">Galeri</p>
                <h2 class="section-title" id="galeri-title">Potret lobster, kolam, dan suasana farm</h2>
            </div>
            <p class="galeri-note">
                <strong>Catatan:</strong> foto pada galeri ini masih berupa ilustrasi
                bertema budidaya lobster, bukan dokumentasi resmi Saung Lobster Denay
                Farm. Foto asli dapat menggantikan file di folder
                <code>assets/images/gallery/</code>.
            </p>
        </div>

        <div class="gallery-grid">
            <?php foreach ($gallery as $index => $photo): ?>
                <article class="gallery-card reveal">
                    <button class="gallery-button" type="button"
                            data-lightbox-trigger
                            data-src="assets/images/gallery/<?= e($photo['file']) ?>"
                            data-title="<?= e($photo['title']) ?>"
                            data-category="<?= e($photo['category']) ?>"
                            data-alt="<?= e($photo['alt']) ?>"
                            aria-label="Perbesar foto: <?= e($photo['title']) ?>">
                        <img src="assets/images/gallery/<?= e($photo['file']) ?>"
                             alt="<?= e($photo['alt']) ?>"
                             width="1000" height="750" loading="lazy" decoding="async">
                        <span class="gallery-zoom" aria-hidden="true"><?= icon('zoom') ?></span>
                    </button>
                    <div class="gallery-caption">
                        <div>
                            <h3><?= e($photo['title']) ?></h3>
                            <p><?= e($photo['category']) ?></p>
                        </div>
                        <span class="illustration-chip">Ilustrasi</span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================
     LOKASI
========================================================== -->
<section class="section lokasi" id="lokasi" aria-labelledby="lokasi-title">
    <div class="container lokasi-grid">
        <div class="map-card reveal">
            <div class="map-frame">
                <div class="map-placeholder" aria-hidden="true">
                    <span class="map-placeholder-icon"><?= icon('pin') ?></span>
                    <span>Memuat peta Google Maps…</span>
                </div>
                <iframe src="<?= e($site['maps_embed']) ?>"
                        title="Peta lokasi Saung Lobster Denay Farm di Google Maps"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        allowfullscreen></iframe>
            </div>
            <div class="map-note">
                <span class="map-note-label"><?= icon('map') ?> Google Maps</span>
                <span>Koordinat: <?= e($site['coordinates']) ?></span>
            </div>
        </div>

        <div class="lokasi-info reveal reveal-delay-1">
            <p class="eyebrow">Lokasi</p>
            <h2 class="section-title" id="lokasi-title">Temukan Saung Lobster Denay Farm</h2>
            <p class="section-lead">
                Lokasi Saung Lobster Denay Farm dapat dilihat langsung melalui Google
                Maps. Gunakan tombol di bawah untuk membuka peta dan mendapatkan
                petunjuk arah.
            </p>

            <ul class="info-list">
                <li>
                    <span class="info-label">Nama tempat</span>
                    <span class="info-value"><?= e($site['name']) ?></span>
                </li>
                <li>
                    <span class="info-label">Koordinat</span>
                    <span class="info-value info-value-copy">
                        <?= e($site['coordinates']) ?>
                        <button class="copy-btn" type="button" data-copy="<?= e($site['coordinates']) ?>">
                            <?= icon('copy') ?>
                            <span>Salin</span>
                        </button>
                    </span>
                </li>
                <li>
                    <span class="info-label">Alamat lengkap</span>
                    <span class="info-value">
                        <?php if (!empty($site['address'])): ?>
                            <?= e($site['address']) ?>
                        <?php else: ?>
                            <span class="badge-pending">Belum tersedia</span>
                        <?php endif; ?>
                    </span>
                </li>
                <li>
                    <span class="info-label">Jam kunjungan</span>
                    <span class="info-value">
                        <?php if (!empty($site['hours'])): ?>
                            <?= e($site['hours']) ?>
                        <?php else: ?>
                            <span class="badge-pending">Belum tersedia</span>
                        <?php endif; ?>
                    </span>
                </li>
            </ul>

            <div class="lokasi-actions">
                <a class="btn btn-primary" href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener noreferrer">
                    Buka di Google Maps
                    <?= icon('arrow-up-right') ?>
                </a>
                <a class="btn btn-outline" href="<?= e($site['maps_route']) ?>" target="_blank" rel="noopener noreferrer">
                    Petunjuk arah
                    <?= icon('route') ?>
                </a>
            </div>

            <?php if ($missingLocationInfo): ?>
                <p class="lokasi-note">
                    <?= e(ucfirst(implode(' dan ', $missingLocationInfo))) ?> belum
                    diverifikasi. Silakan konfirmasi kepada pengelola sebelum berkunjung.
                </p>
            <?php endif; ?>
            <span class="copy-status" id="copyStatus" role="status" aria-live="polite"></span>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
