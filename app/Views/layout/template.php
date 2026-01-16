<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= esc($title); ?>
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container navbar-container">
            <a href="<?= base_url('/'); ?>" class="logo">
                <img src="<?= base_url('images/logo.png'); ?>" alt="Telur Dadar Juara Logo">
                <div class="brand-text">Telur Dadar <span>Juara</span></div>
            </a>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links" id="nav-links">
                <li><a href="<?= base_url('/'); ?>" class="<?= ($active == 'home') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?= base_url('menu'); ?>" class="<?= ($active == 'menu') ? 'active' : ''; ?>">Menu</a></li>
                <li><a href="<?= base_url('about'); ?>" class="<?= ($active == 'about') ? 'active' : ''; ?>">Tentang
                        Kami</a></li>
                <li><a href="https://wa.me/6281234567890" target="_blank" class="btn-cta"><i
                            class="fab fa-whatsapp"></i> Pesan Sekarang</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-brand">
                <h3>Telur Dadar <span>Juara</span></h3>
                <p>Nikmatnya telur dadar khas dengan bumbu rahasia yang bikin nagih.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="<?= base_url('/'); ?>">Home</a></li>
                    <li><a href="<?= base_url('menu'); ?>">Menu</a></li>
                    <li><a href="<?= base_url('about'); ?>">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Hubungi Kami</h4>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Sasak Gantung, Bandung</p>
                <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy;
                <?= date('Y'); ?> Telur Dadar Juara. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?= base_url('js/script.js'); ?>"></script>
</body>

</html>