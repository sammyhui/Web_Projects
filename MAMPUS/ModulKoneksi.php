<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mampus"; // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
