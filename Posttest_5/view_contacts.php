<?php
include('koneksi_db.php'); // Koneksi ke database

// Query untuk mengambil semua data dari tabel contacts
$sql = "SELECT id, name, email, phone, message FROM contacts";
$result = $conn->query($sql);

// Tampilkan data dalam bentuk tabel
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {
        // Menampilkan data dalam baris tabel
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['message']."</td>
                <td> 
                    <a href='#' onclick=\"editData('".$row['id']."', '".$row['name']."', '".$row['email']."', '".$row['phone']."', '".$row['message']."')\">Edit </a> | 
                    <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a> |
                    <a href='update.php?id=".$row['id']."'>Update</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 hasil";
}

$conn->close();
?>