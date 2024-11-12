<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'todolist');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
