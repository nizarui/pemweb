<?php
require 'koneksi.php';
$namalengkap = $_POST["namalengkap"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tb_peserta (namalengkap, email, password)
            VALUES ('$namalengkap', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: formlogin.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}

?>