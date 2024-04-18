<?php
$servername = "localhost"; // Sesuaikan dengan nama server MySQL Anda
$database = "basreng_nals"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$db_connection = new mysqli($servername, $database);

// Periksa koneksi
if ($db_connection->connect_error) {
    die("Koneksi gagal: " . $db_connection->connect_error);
}
?>
