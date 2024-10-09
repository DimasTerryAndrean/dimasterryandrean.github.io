<?php
include('koneksi_db.php'); // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Pastikan semua data tersedia sebelum menjalankan query
    if (!empty($id) && !empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        // Query untuk memperbarui data di database
        $query = "UPDATE contacts SET name='$name', email='$email', phone='$phone', message='$message' WHERE id='$id'";

        // Jalankan query
        if (mysqli_query($conn, $query)) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Semua field harus diisi.";
    }
}

$conn->close(); // Menutup koneksi ke database
?>

Form Edit
<form method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>"> <!-- Ambil ID dari URL -->
    <input type="text" name="name" placeholder="Nama" value="<?php echo htmlspecialchars($data['name']); ?>" required>
    <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
    <input type="text" name="phone" placeholder="Nomor Telepon" value="<?php echo htmlspecialchars($data['phone']); ?>" required>
    <textarea name="message" placeholder="Pesan" required><?php echo htmlspecialchars($data['message']); ?></textarea>
    <button type="submit">Update</button>
</form>
