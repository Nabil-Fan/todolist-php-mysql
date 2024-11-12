<?php
include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deskripsi = $_POST['deskripsi'];

    if (!empty($deskripsi)) {
        $query = "INSERT INTO todolist (deskripsi) VALUES ('$deskripsi')";
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Deskripsi tidak boleh kosong!";
    }
}
?>
