<?php
/**
 * Footer, lightbox, dan pemuatan JavaScript.
 *
 * Variabel yang dibutuhkan: $site, $navigation, $gallery, $photoCredits.
 */
?>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a class="brand" href="#beranda" aria-label="<?= e($site['name']) ?> — Beranda">
                    <span class="brand-mark" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none" focusable="false">
                            <circle cx="24" cy="24" r="23" fill="#063442"/>
                            <circle cx="24" cy="24" r="22.2" stroke="rgba(255,255,255,.28)" stroke-width="1"/>
                            <path d="M33 20c4-5 7-8 10-9M34 23c4-3 7-4 10-4" stroke="#F47B5A" stroke-width="1.6" stroke-linecap="round"/>
                            <path d="M13 24c-3-3-5-5-6-8M12 26c-3-1-5-2-7-4M13 28c-3 1-5 2-7 4" stroke="#F4A261" stroke-width="1.6" stroke-linecap="round"/>
                            <path d="M14 24c0-3 3-5 6-5h7c3 0 5 2 5 5s-2 5-5 5h-7c-3 0-6-2-6-5Z" fill="#F47B5A"/>
                            <path d="M19 19v10M24 19v10M29 19v10" stroke="#063442" stroke-width="1.2" opacity=".45"/>
                            <path d="M20 29l-2 5M25 29l-1 6M30 29l2 5" stroke="#F4A261" stroke-width="1.4" stroke-linecap="round"/>
                            <circle cx="32.5" cy="22" r="1.1" fill="#063442"/>
                        </svg>
                    </span>
                    <span class="brand-text">
                        <span class="brand-kicker">Saung Lobster</span>
                        <span class="brand-name">Denay Farm</span>
                    </span>
                </a>
                <p>
                    Website profil Saung Lobster Denay Farm. Mengenalkan usaha budidaya
                    lobster melalui informasi, dokumentasi, dan lokasi.
                </p>
            </div>

            <div>
                <h2 class="footer-title">Navigasi</h2>
                <ul class="footer-links">
                    <?php foreach ($navigation as $item): ?>
                        <li><a href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <h2 class="footer-title">Tautan</h2>
                <ul class="footer-links">
                    <li>
                        <a href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener noreferrer">
                            Google Maps <?= icon('arrow-up-right') ?>
                        </a>
                    </li>
                    <li><a href="#lokasi">Lokasi farm</a></li>
                    <li><a href="#tentang">Catatan konten</a></li>
                </ul>
            </div>

            <div>
                <h2 class="footer-title">Tentang situs</h2>
                <p class="footer-about">
                    Situs statis berbasis PHP Native tanpa database. Seluruh konten dapat
                    diperbarui melalui file di folder <code>includes/</code> dan
                    <code>assets/</code>.
                </p>
            </div>
        </div>

        <details class="photo-credits">
            <summary>Kredit foto sementara (<?= count($gallery) ?> foto)</summary>
            <ul>
                <?php foreach ($photoCredits as $credit): ?>
                    <li>
                        <a href="<?= e($credit['source']) ?>" target="_blank" rel="noopener noreferrer"><?= e($credit['title']) ?></a>
                        — <?= e($credit['author']) ?>
                        (<a href="<?= e($credit['license_url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($credit['license']) ?></a>)
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="photo-credits-note">
                Foto diperkecil dan sebagian dipotong untuk kebutuhan tata letak.
                Karya berlisensi CC BY-SA tetap tersedia di bawah lisensi yang sama.
                Ganti dengan dokumentasi asli Saung Lobster Denay Farm, lalu perbarui
                atau hapus daftar ini.
            </p>
        </details>

        <div class="footer-bottom">
            <p>&copy; <?= e((string) $site['year']) ?> <?= e($site['name']) ?>. Hak cipta dilindungi.</p>
            <p>Dibangun dengan PHP Native · HTML · CSS · JavaScript</p>
        </div>
    </div>
</footer>

<!-- Lightbox galeri -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-labelledby="lightboxTitle" hidden>
    <button class="lightbox-close" type="button" data-lightbox-close aria-label="Tutup galeri">
        <?= icon('close') ?>
    </button>
    <button class="lightbox-nav lightbox-prev" type="button" data-lightbox-prev aria-label="Foto sebelumnya">
        <?= icon('chevron-left') ?>
    </button>

    <figure class="lightbox-figure">
        <img class="lightbox-image" id="lightboxImage" src="" alt="">
        <figcaption class="lightbox-caption">
            <strong id="lightboxTitle"></strong>
            <span id="lightboxMeta"></span>
        </figcaption>
    </figure>

    <button class="lightbox-nav lightbox-next" type="button" data-lightbox-next aria-label="Foto berikutnya">
        <?= icon('chevron-right') ?>
    </button>
    <span class="lightbox-counter" id="lightboxCounter"></span>
</div>

<button class="to-top" id="toTop" type="button" aria-label="Kembali ke atas">
    <?= icon('arrow-up') ?>
</button>

<script src="assets/js/script.js?v=1.0" defer></script>
</body>
</html>
