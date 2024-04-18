<?php
include 'koneksi.php';

// Query untuk mengambil data dari tabel 'barang'
$sql = "SELECT * FROM barang";
$result = $db_connection->query($sql);

// Tampilkan data dalam format tabel HTML
if ($result->num_rows > 0) {
    echo "<table><tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["kd_barang"]."</td><td>".$row["nama_barang"]."</td><td>".$row["harga_satuan"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel.";
}
$db_connection->close();
?>
