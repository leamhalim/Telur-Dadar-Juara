<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="container">
        <div class="about-content">
            <div class="about-image">
                <img src="<?= base_url('images/about-interior.jpg'); ?>" alt="Tentang Kami">
            </div>
            <div class="about-text">
                <h2>Tentang Telur Dadar Juara</h2>
                <p>Berawal dari kecintaan kami terhadap masakan rumahan yang sederhana namun penuh makna, <strong>Telur
                        Dadar Juara</strong> hadir untuk menyajikan hidangan telur dadar yang "next level".</p>
                <p>Kami percaya bahwa makanan enak tidak harus mahal. Dengan resep bumbu rahasia warisan keluarga dan
                    teknik penggorengan yang pas, kami menghadirkan telur dadar yang renyah di luar namun lembut di
                    dalam.</p>
                <br>
                <h3>Visi Kami</h3>
                <p>Menjadi pilihan utama kuliner mahasiswa dan keluarga Indonesia yang mencari rasa otentik dengan harga
                    terjangkau.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-color: var(--light-bg);">
    <div class="container" style="text-align: center;">
        <div class="section-title">
            <h2>Kunjungi Kami</h2>
            <p>Datang dan rasakan langsung kenikmatannya!</p>
        </div>

        <div
            style="background: white; padding: 30px; border-radius: var(--border-radius); box-shadow: 0 5px 15px rgba(0,0,0,0.05); max-width: 600px; margin: 0 auto;">
            <i class="fas fa-map-marked-alt"
                style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;"></i>
            <h3>Lokasi Outlet</h3>
            <p><strong>Jl. Sasak Gantung, Bandung</strong></p>
            <p style="margin-top: 10px;">Buka Setiap Hari: 10.00 - 22.00 WIB</p>
            <a href="https://maps.app.goo.gl/Soo8PqRQAopwq4oF6" target="_blank" class="btn-cta"
                style="margin-top: 20px;"><i class="fas fa-directions"></i> Google Maps</a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>