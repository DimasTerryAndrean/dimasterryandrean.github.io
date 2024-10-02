<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Penjualan Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="light-mode">

<?php include('header.php'); ?>

<main>
    <section id="home" class="hero">
        <h1>Selamat Datang di MobilKita.com</h1>
        <p>Tempat ini Menyediakan Mobil Mobil yang Kalian Impikan dengan Harga yang Terjangkau</p>
        <button class="cta" id="cta-btn"> Lihat Mobil </button>
    </section>

        <?php include('list_mobil.php'); ?>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2 id="car-name"></h2>
            <p id="car-price"></p>
        </div>
    </div>

    <section id="contact" class="contact-form">
        <h2>Kontak Kami</h2>
        <form id="form" action="" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>

        <?php include('hasil_input.php'); ?>

    </section>

    <section id="about" class="about-me">
        <h2>Tentang Saya</h2>
        <p>Nama: Dimas Terry Andrean</p>
        <p>NIM: 2309106121</p>
        <p>Program Studi: Pemrograman Web</p>
        <p>Saya adalah seorang mahasiswa yang sedang mempelajari pengembangan Website Penjualan Mobil</p>
    </section>

</main>

<?php include('footer.php'); ?>

<script src="script.js"></script>

</body>
</html>
