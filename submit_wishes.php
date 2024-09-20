<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_ridhwan_angel";

// $servername = "	sql302.infinityfree.com";
// $username = "if0_36796556";
// $password = "Pcod9ZI9Rk";
// $dbname = "if0_36796556_wedding_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

// Memasukkan data ke database
$sql = "INSERT INTO wedding_wishes (Nama, Pesan) VALUES ('$nama', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Pesan berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php#wishes-container");
?>
