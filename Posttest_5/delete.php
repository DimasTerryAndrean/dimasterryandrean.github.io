<?php
include('koneksi_db.php'); // Koneksi ke database

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM contacts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
