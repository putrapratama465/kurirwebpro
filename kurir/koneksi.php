<?php
$koneksi = new mysqli('localhost', 'root', '','kurir');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>