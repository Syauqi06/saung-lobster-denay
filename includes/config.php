<?php
declare(strict_types=1);

/**
 * Konfigurasi konten Saung Lobster Denay Farm.
 *
 * Semua data yang mudah berubah (tautan peta, daftar galeri, kredit foto,
 * dan kartu edukasi) dikumpulkan di sini agar halaman utama tetap rapi.
 */

$site = [
    'name'        => 'Saung Lobster Denay Farm',
    'tagline'     => 'Tumbuh alami, dirawat sepenuh hati.',
    'description' => 'Website profil Saung Lobster Denay Farm: informasi usaha, edukasi budidaya lobster, galeri foto, dan lokasi farm.',
    'maps_url'    => 'https://maps.app.goo.gl/M5hYvrRUN5aS9tL89',
    'maps_embed'  => 'https://www.google.com/maps?q=-6.2156518,107.1188353&z=16&hl=id&output=embed',
    'maps_route'  => 'https://www.google.com/maps/dir/?api=1&destination=-6.2156518%2C107.1188353',
    'coordinates' => '-6.2156518, 107.1188353',
    'address'     => null, // Isi setelah alamat terverifikasi.
    'hours'       => null, // Isi setelah jam kunjungan terverifikasi.
    'year'        => (int) date('Y'),
];

$navigation = [
    ['label' => 'Beranda', 'href' => '#beranda'],
    ['label' => 'Tentang Kami', 'href' => '#tentang'],
    ['label' => 'Budidaya', 'href' => '#budidaya'],
    ['label' => 'Galeri', 'href' => '#galeri'],
    ['label' => 'Lokasi', 'href' => '#lokasi'],
];

/**
 * Kartu edukasi budidaya.
 * Informasi di sini bersifat umum dan tidak mewakili praktik operasional
 * Saung Lobster Denay Farm yang belum diverifikasi.
 */
$eduCards = [
    [
        'icon'  => 'water',
        'title' => 'Pengenalan budidaya',
        'text'  => 'Budidaya lobster adalah kegiatan memelihara lobster dalam wadah terkontrol, seperti kolam, bak, atau keramba, dengan memperhatikan kebutuhan hidupnya.',
    ],
    [
        'icon'  => 'feed',
        'title' => 'Pemeliharaan & pakan',
        'text'  => 'Pemberian pakan perlu disesuaikan dengan ukuran, jumlah, dan kondisi lobster. Jadwal serta jumlah pakan dipantau agar tidak berlebihan dan kualitas air tetap terjaga.',
    ],
    [
        'icon'  => 'pool',
        'title' => 'Kolam & fasilitas',
        'text'  => 'Wadah pemeliharaan perlu bersih, memiliki sirkulasi air yang baik, dan dilengkapi fasilitas pendukung seperti aerasi atau shelter sesuai kebutuhan.',
    ],
    [
        'icon'  => 'health',
        'title' => 'Kualitas air & kesehatan',
        'text'  => 'Suhu, pH, oksigen terlarut, dan kebersihan air dipantau secara berkala. Perubahan perilaku atau kondisi tubuh lobster menjadi perhatian penting.',
    ],
];

/**
 * Galeri foto.
 *
 * Ganti file di assets/images/gallery/ dengan foto asli, lalu perbarui
 * judul, kategori, dan alt text di bawah ini. Rasio tampilan galeri
 * menggunakan object-fit: cover sehingga proporsi foto tidak terdistorsi.
 */
$gallery = [
    [
        'file'     => 'gallery-01.jpg',
        'title'    => 'Detail tubuh lobster',
        'category' => 'Lobster',
        'alt'      => 'Tampak dekat tubuh lobster dengan corak bintik dan antena panjang.',
    ],
    [
        'file'     => 'gallery-02.jpg',
        'title'    => 'Lobster di dasar perairan',
        'category' => 'Lobster',
        'alt'      => 'Lobster berjalan di dasar perairan berpasir.',
    ],
    [
        'file'     => 'gallery-03.jpg',
        'title'    => 'Pola warna alami',
        'category' => 'Lobster',
        'alt'      => 'Lobster dengan pola garis dan warna alami di habitatnya.',
    ],
    [
        'file'     => 'gallery-04.jpg',
        'title'    => 'Lobster dalam wadah pemeliharaan',
        'category' => 'Fasilitas',
        'alt'      => 'Seekor lobster berada di dalam wadah pemeliharaan berisi air bening.',
    ],
    [
        'file'     => 'gallery-05.jpg',
        'title'    => 'Pemeliharaan di wadah bersekat',
        'category' => 'Kegiatan',
        'alt'      => 'Wadah pemeliharaan bersekat dengan lobster dan pakan di dalamnya.',
    ],
    [
        'file'     => 'gallery-06.jpg',
        'title'    => 'Kolam di kawasan hijau',
        'category' => 'Suasana',
        'alt'      => 'Kolam budidaya dikelilingi tanaman pisang dan pepohonan hijau.',
    ],
    [
        'file'     => 'gallery-07.jpg',
        'title'    => 'Kolam budidaya',
        'category' => 'Fasilitas',
        'alt'      => 'Kolam budidaya luas dengan pematang rumput dan bangunan di kejauhan.',
    ],
    [
        'file'     => 'gallery-08.jpg',
        'title'    => 'Jalur antar kolam',
        'category' => 'Suasana',
        'alt'      => 'Jalan sempit di antara dua kolam yang tenang pada pagi hari.',
    ],
    [
        'file'     => 'gallery-09.jpg',
        'title'    => 'Fasilitas aerasi kolam',
        'category' => 'Fasilitas',
        'alt'      => 'Deretan kolam budidaya dengan peralatan aerasi dan bangunan pendukung.',
    ],
];

/**
 * Kredit foto sementara.
 * Hapus atau sesuaikan daftar ini setelah mengganti foto ilustrasi dengan
 * dokumentasi milik Saung Lobster Denay Farm.
 */
$photoCredits = [
    [
        'title'       => 'Lobster. Underwater World. Langkawi Island',
        'author'      => 'Phalinn Ooi',
        'license'     => 'CC BY 2.0',
        'license_url' => 'https://creativecommons.org/licenses/by/2.0/',
        'source'      => 'https://www.flickr.com/photo.gne?id=20000658394',
    ],
    [
        'title'       => 'Painted Spiny Lobster',
        'author'      => 'Elias Levy',
        'license'     => 'CC BY 2.0',
        'license_url' => 'https://creativecommons.org/licenses/by/2.0/',
        'source'      => 'https://www.flickr.com/photo.gne?id=14467353995',
    ],
    [
        'title'       => 'Painted Spiny Lobster',
        'author'      => 'Elias Levy',
        'license'     => 'CC BY 2.0',
        'license_url' => 'https://creativecommons.org/licenses/by/2.0/',
        'source'      => 'https://www.flickr.com/photo.gne?id=14444249696',
    ],
    [
        'title'       => 'Lobster in research tank',
        'author'      => 'Filippo antinori1223',
        'license'     => 'CC BY-SA 4.0',
        'license_url' => 'https://creativecommons.org/licenses/by-sa/4.0/',
        'source'      => 'https://commons.wikimedia.org/wiki/File:Lobster_in_research_tank.jpg',
    ],
    [
        'title'       => 'Hiding Lobster in research tank',
        'author'      => 'Filippo antinori1223',
        'license'     => 'CC BY-SA 4.0',
        'license_url' => 'https://creativecommons.org/licenses/by-sa/4.0/',
        'source'      => 'https://commons.wikimedia.org/wiki/File:Hiding_Lobster_in_research_tank.jpg',
    ],
    [
        'title'       => 'Aquaculture Pond',
        'author'      => 'MyLifeStory',
        'license'     => 'CC BY 2.0',
        'license_url' => 'https://creativecommons.org/licenses/by/2.0/',
        'source'      => 'https://www.flickr.com/photo.gne?id=480884133',
    ],
    [
        'title'       => 'Fish pond at Aquaculture Research and Development Centre, Kajjansi',
        'author'      => 'Faintsmoke',
        'license'     => 'CC BY-SA 4.0',
        'license_url' => 'https://creativecommons.org/licenses/by-sa/4.0/',
        'source'      => 'https://commons.wikimedia.org/wiki/File:Fish_pond_at_Aquaculture_Research_and_Development_Centre,_Kajjansi.JPG',
    ],
    [
        'title'       => 'Small road between two fish ponds (Bandung, Indonesia) (2017)',
        'author'      => 'Biggie83',
        'license'     => 'CC BY-SA 3.0',
        'license_url' => 'https://creativecommons.org/licenses/by-sa/3.0/',
        'source'      => 'https://commons.wikimedia.org/wiki/File:Small_road_between_two_fish_ponds_%28Bandung,_Indonesia%29_%282017%29.jpg',
    ],
    [
        'title'       => 'Soy Aquaculture Pond & Paddlewheel',
        'author'      => 'UnitedSoybeanBoard',
        'license'     => 'CC BY 2.0',
        'license_url' => 'https://creativecommons.org/licenses/by/2.0/',
        'source'      => 'https://www.flickr.com/photo.gne?id=9621992345',
    ],
];

/**
 * Ikon SVG sederhana agar halaman tidak bergantung pada pustaka ikon eksternal.
 */
$icons = [
    'arrow-right' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 12h16M14 6l6 6-6 6"/></svg>',
    'arrow-down'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 4v16M6 14l6 6 6-6"/></svg>',
    'arrow-up'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 20V4M6 10l6-6 6 6"/></svg>',
    'arrow-up-right' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 17 17 7M8 7h9v9"/></svg>',
    'pin'         => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>',
    'map'         => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m9 18-6 3V6l6-3 6 3 6-3v15l-6 3-6-3Z"/><path d="M9 3v15M15 6v15"/></svg>',
    'route'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="6" cy="19" r="2"/><circle cx="18" cy="5" r="2"/><path d="M8 19h6a4 4 0 0 0 4-4V7"/></svg>',
    'info'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 11v5M12 8h.01"/></svg>',
    'profile'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M5 17c.8-2 2.3-3 4-3s3.2 1 4 3M15 10h4M15 14h4"/></svg>',
    'camera'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 7h3l2-3h6l2 3h3v13H4V7Z"/><circle cx="12" cy="13" r="4"/></svg>',
    'shield'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3 4 6v6c0 5 8 9 8 9s8-4 8-9V6l-8-3Z"/><path d="m9 12 2 2 4-4"/></svg>',
    'book'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5v14Z"/><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5M8 7h8M8 11h5"/></svg>',
    'water'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 8c2-2 4-2 6 0s4 2 6 0 4-2 6 0M3 13c2-2 4-2 6 0s4 2 6 0 4-2 6 0M3 18c2-2 4-2 6 0s4 2 6 0 4-2 6 0"/></svg>',
    'feed'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 12c3-4 7-6 12-5l4 5-4 5c-5 1-9-1-12-5Z"/><circle cx="16" cy="11" r="1"/><path d="M8 7 6 4M8 17l-2 3"/></svg>',
    'pool'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="7" width="18" height="10" rx="2"/><path d="M7 7v10M17 7v10M3 12h18"/></svg>',
    'health'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20.8 5.6a5.5 5.5 0 0 0-7.8 0L12 6.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 22l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8Z"/><path d="M3.5 12h4l2-4 3 7 2-3h6"/></svg>',
    'zoom'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4M11 8v6M8 11h6"/></svg>',
    'close'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m6 6 12 12M18 6 6 18"/></svg>',
    'chevron-left'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m15 5-7 7 7 7"/></svg>',
    'chevron-right' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m9 5 7 7-7 7"/></svg>',
    'copy'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="9" y="9" width="11" height="11" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>',
    'check'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m5 12 4 4L19 6"/></svg>',
];

/**
 * Mengamankan teks untuk ditampilkan di HTML.
 */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Menampilkan ikon dari daftar $icons.
 */
function icon(string $name): string
{
    global $icons;

    return $icons[$name] ?? '';
}
