<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <div class="hero-text">
            <h1>Rasa Juara,<br>Harga Mahasiswa!</h1>
            <p>Nikmati sensasi telur dadar crispy dengan berbagai pilihan sambal dan topping yang menggugah selera. Siap
                bikin harimu lebih berenergi!</p>
            <a href="<?= base_url('menu'); ?>" class="btn-cta">Lihat Menu</a>
        </div>

    </div>
</section>

<!-- Highlights Section -->
<section class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-title">
            <h2>Kenapa Memilih Kami?</h2>
            <p>Kami berkomitmen memberikan sajian terbaik untuk setiap pelanggan.</p>
        </div>

        <div class="menu-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="menu-card">
                <i class="fas fa-certificate"
                    style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                <h3>Bahan Berkualitas</h3>
                <p>Menggunakan telur segar dan bahan-bahan pilihan setiap hari.</p>
            </div>
            <div class="menu-card">
                <i class="fas fa-fire" style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                <h3>Sambal Juara</h3>
                <p>Aneka pilihan sambal pedas yang bikin nagih dan keringat bercucuran.</p>
            </div>
            <div class="menu-card">
                <i class="fas fa-wallet"
                    style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                <h3>Harga Bersahabat</h3>
                <p>Kenyang nikmat tanpa bikin kantong bolong.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Menu Preview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Menu Favorit</h2>
        </div>
        <div class="menu-grid">
            <div class="menu-card">
                <img src="<?= base_url('images/paket-juara-1.jpg'); ?>" alt="Paket Juara 1 Tongkol" class="menu-img">
                <div class="menu-info">
                    <h3>Paket Juara 1 Tongkol</h3>
                    <p class="menu-price">Rp 42.500</p>
                    <a href="<?= base_url('menu'); ?>" class="btn-cta"
                        style="font-size: 0.8rem; padding: 5px 15px;">Pesan</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="<?= base_url('images/paket-juara-2.jpg'); ?>" alt="Paket Juara 2 Cumi" class="menu-img">
                <div class="menu-info">
                    <h3>Paket Juara 2 Cumi</h3>
                    <p class="menu-price">Rp 44.500</p>
                    <a href="<?= base_url('menu'); ?>" class="btn-cta"
                        style="font-size: 0.8rem; padding: 5px 15px;">Pesan</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="<?= base_url('images/paket-juara-3.jpg'); ?>" alt="Paket Juara 3 Polos" class="menu-img">
                <div class="menu-info">
                    <h3>Paket Juara 3 Polos</h3>
                    <p class="menu-price">Rp 38.800</p>
                    <a href="<?= base_url('menu'); ?>" class="btn-cta"
                        style="font-size: 0.8rem; padding: 5px 15px;">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>