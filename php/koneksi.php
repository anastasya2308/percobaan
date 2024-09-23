<?php
$servername = "localhost";
$database = "laundry";
$username = "root"; // ganti pake usn database kamu
$password = ""; // ganti pake pass database kamu

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}