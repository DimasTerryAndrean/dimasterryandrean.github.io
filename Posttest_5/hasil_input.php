<?php
include('koneksi_db.php'); // Pastikan file koneksi sudah benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Query untuk memasukkan data ke dalam tabel contacts
    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan."; // Pesan jika data berhasil masuk
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Tampilkan error jika gagal
    }
}

$conn->close();
?>
