<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            echo "<h2>Data Kontak Anda:</h2>";
            echo "<p>Nama: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Nomor Telepon: $phone</p>";
            echo "<p>Pesan: $message</p>";
}
?>