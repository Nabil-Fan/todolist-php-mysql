<?php
include 'config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM todolist WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
