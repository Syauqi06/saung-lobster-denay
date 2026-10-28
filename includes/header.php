<?php
/**
 * Bagian kepala halaman dan navigasi utama.
 *
 * Variabel yang dibutuhkan: $site, $navigation, $pageTitle, $pageDescription.
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#063442">
    <meta name="description" content="<?= e($pageDescription) ?>">

    <title><?= e($pageTitle) ?></title>

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <meta property="og:image" content="assets/images/og-image.jpg">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <link rel="preload" href="assets/fonts/fraunces-latin.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/manrope-latin.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="assets/css/style.css?v=1.0">

    <script>document.documentElement.classList.add('js');</script>
</head>
<body>
<a class="skip-link" href="#konten">Lewati ke konten utama</a>

<header class="site-header" id="siteHeader">
    <div class="container header-inner">
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

        <nav class="main-nav" id="mainNav" aria-label="Navigasi utama">
            <ul>
                <?php foreach ($navigation as $index => $item): ?>
                    <li>
                        <a class="nav-link<?= $index === 0 ? ' is-active' : '' ?>"
                           href="<?= e($item['href']) ?>"
                           <?= $index === 0 ? 'aria-current="location"' : '' ?>>
                            <?= e($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <button class="nav-toggle" id="navToggle" type="button"
                aria-expanded="false" aria-controls="mainNav" aria-label="Buka menu navigasi">
            <span class="nav-toggle-box" aria-hidden="true">
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</header>

<main id="konten">
