<?php
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$number = $_POST["number"];
$password = $_POST["password"];


$query_sql = "INSERT INTO user (username, email, number, password) VALUES ('$username', '$email', '$number', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}