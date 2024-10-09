<?php
include('koneksi_db.php'); // Pastikan koneksi ke database

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk mendapatkan data yang akan diedit
    $sql = "SELECT * FROM contacts WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Query untuk update data
    $sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone', message='$message' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
