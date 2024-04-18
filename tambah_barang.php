<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $kd_barang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_satuan = $_POST['harga_satuan'];

    // Query untuk menambahkan data baru ke tabel 'barang'
    $sql = "INSERT INTO barang (kd_barang, nama_barang, harga_satuan) VALUES ('$kd_barang','$nama_barang', '$harga_satuan')";

    if ($db_connection->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $db_connection->error;
    }
}

$db_connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Barang</title>
</head>
<body>
    <h2>Form Tambah Barang</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Kode Barang : <input type="text" name="kd_barang"><br>
        Nama Barang : <input type="text" name="nama_barang"><br>
        Harga : <input type="text" name="harga_satuan"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
