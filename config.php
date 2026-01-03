<?php
$host = "localhost";
$user = "syntax@gmail.com";
$pass = "123456789";
$db   = "project_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
