<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Daftar Menu Kami</h2>
            <p>Pilih paket favoritmu dan rasakan kenikmatannya!</p>
        </div>

        <div class="menu-grid">
            <!-- Item 1 -->
            <div class="menu-card">
                <img src="<?= base_url('images/paket-juara-1.jpg'); ?>" alt="Paket Juara 1 Tongkol" class="menu-img">
                <div class="menu-info">
                    <h3>Paket Juara 1 Tongkol</h3>
                    <p class="menu-price">Rp 42.500</p>
                    <p>1 Porsi Nasi Telur Dadar Sambal Bawang/Rica Tongkol + Lemon Tea</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="menu-card">
                <img src="<?= base_url('images/paket-juara-2.jpg'); ?>" alt="Paket Juara 2 Cumi" class="menu-img">
                <div class="menu-info">
                    <h3>Paket Juara 2 Cumi</h3>
                    <p class="menu-price">Rp 44.500</p>
                    <p>1 Porsi Nasi Telur Dadar Sambal Bawang/Rica Cumi + Lemon Tea</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="menu-card">
                <img src="<?= base_url('images/paket-juara-3.jpg'); ?>" alt="Paket Juara 3 Polos" class="menu-img">
                <div class="menu-info">
                    <h3>Paket Juara 3 Polos</h3>
                    <p class="menu-price">Rp 38.800</p>
                    <p>1 Porsi Nasi Telur Dadar Sambal Bawang/Rica Polos (tanpa lauk) + Lemon Tea</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="menu-card">
                <img src="<?= base_url('images/nasi-telur-ceplok.jpg'); ?>" alt="Nasi Telur Ceplok Polos"
                    class="menu-img">
                <div class="menu-info">
                    <h3>Nasi Telur Ceplok Polos</h3>
                    <p class="menu-price">Rp 22.600</p>
                    <p>Include: Telur Ceplok, Nasi, Jukut Goreng, Pilihan Sambal Rica/Bawang</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="menu-card">
                <img src="<?= base_url('images/es-teh.jpg'); ?>" alt="Es Teh Manis" class="menu-img">
                <div class="menu-info">
                    <h3>Es Teh Manis Jumbo</h3>
                    <p class="menu-price">Rp 10.000</p>
                    <p>Segar dan manis, pas untuk pendamping makan.</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="menu-card">
                <img src="<?= base_url('images/es-jeruk.jpg'); ?>" alt="Es Jeruk" class="menu-img">
                <div class="menu-info">
                    <h3>Es Jeruk Peras</h3>
                    <p class="menu-price">Rp 22.600</p>
                    <p>Jeruk asli, vitamin C booster!</p>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 50px;">
        <p style="margin-bottom: 20px; color: var(--text-light);">Ingin melihat pilihan menu lainnya?</p>
        <a href="https://tr.ee/2PrRIXC_NP" target="_blank" class="btn-cta"
            style="padding: 12px 30px; font-size: 1.1rem;">
            <i class="fas fa-utensils" style="margin-right: 10px;"></i> Lihat Menu Lengkap
        </a>
    </div>
    </div>
</section>

<?= $this->endSection(); ?>