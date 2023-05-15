<?php
// Memulai session
session_start();

// Memeriksa apakah tombol next pada halaman 1 telah diklik
if(isset($_POST["next"])) {
  // Menyimpan data dari halaman 1 ke dalam session
  $_SESSION["jp"] = $_POST["jp"];
  $_SESSION["tanggalmasuksekolah"] = $_POST["tanggalmasuksekolah"];
  $_SESSION["nis"] = $_POST["nis"];
  $_SESSION["npu"] = $_POST["npu"];
  $_SESSION["paud"] = $_POST["paud"];
  $_SESSION["tk"] = $_POST["tk"];
  $_SESSION["skhun"] = $_POST["skhun"];
  $_SESSION["ijazah"] = $_POST["ijazah"];
  $_SESSION["hobi"] = $_POST["hobi"];
  $_SESSION["cita"] = $_POST["cita"];

  // Redirect ke halaman 2
  header("Location: formdatapribadi.php");
  exit();
}

// Memeriksa apakah tombol submit pada halaman 2 telah diklik
if(isset($_POST["submit2"])) {
  // Mengambil data dari session dan halaman 2
  $jp = $_SESSION["jp"];
  $tanggalmasuksekolah = $_SESSION["tanggalmasuksekolah"];
  $nis = $_SESSION["nis"];
  $npu = $_SESSION["npu"];
  $paud = $_SESSION["paud"];
  $tk = $_SESSION["tk"];
  $skhun = $_SESSION["skhun"];
  $ijazah = $_SESSION["ijazah"];
  $hobi = $_SESSION["hobi"];
  $cita = $_SESSION["cita"];
  
  $namalengkappribadi = $_POST["namalengkappribadi"];
  $jk = $_POST["jk"];
  $nisn = $_POST["nisn"];
  $nik = $_POST["nik"];
  $tanggallahir = $_POST["tanggallahir"];
  $tempatlahir = $_POST["tempatlahir"];
  $agama = $_POST["agama"];
  $bk = $_POST["bk"];
  $alamatjalan = $_POST["alamatjalan"];
  $rt = $_POST["rt"];
  $rw = $_POST["rw"];
  $namadusun = $_POST["namadusun"];
  $kelurahan = $_POST["kelurahan"];
  $kecamatan = $_POST["kecamatan"];
  $kodepos = $_POST["kodepos"];
  $tt = $_POST["tt"];
  $mt = $_POST["mt"];
  $hp = $_POST["hp"];
  $telepon = $_POST["telepon"];
  $emailpribadi = $_POST["emailpribadi"];
  $kip = $_POST["kip"];
  $nokip = $_POST["nokip"];
  $kewarganegaraan = $_POST["kewarganegaraan"];
  $asing = $_POST["asing"];

  // Menyimpan data ke database
  require_once('koneksi.php');
  $query = "INSERT INTO tb_form (jp, tanggalmasuksekolah, nis, npu, paud, tk, skhun, ijazah, hobi, cita, namalengkappribadi, jk, nisn, nik, tanggallahir, tempatlahir, agama, bk, alamatjalan, rt, rw, namadusun, kelurahan, kecamatan, kodepos, tt, mt, hp, telepon, emailpribadi, kip, nokip, kewarganegaraan, asing) 
  VALUES ('$jp', '$tanggalmasuksekolah', '$nis', '$npu', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita', '$namalengkappribadi', '$jk', '$nisn', '$nik', '$tanggallahir', '$tempatlahir', '$agama', '$bk', '$alamatjalan', '$rt', '$rw', '$namadusun', '$kelurahan', '$kecamatan', '$kodepos', '$tt', '$mt', '$hp', '$telepon', '$emailpribadi', '$kip', '$nokip', '$kewarganegaraan', '$asing')";
  $result = mysqli_query($conn, $query);


  // Memeriksa apakah data telah berhasil disimpan
  if($result) {
    echo "Data berhasil disimpan ke dalam database";
  } else {
    echo "Data gagal disimpan ke dalam database";
  }

  // Menghapus data session
  session_unset();
  session_destroy();
} else {
  // Jika tombol submit pada halaman 2 belum diklik, maka simpan data dari halaman 1 ke dalam session
  $_SESSION["jp"] = $_POST["jp"];
  $_SESSION["tanggalmasuksekolah"] = $_POST["tanggalmasuksekolah"];
  $_SESSION["nis"] = $_POST["nis"];
  $_SESSION["npu"] = $_POST["npu"];
  $_SESSION["paud"] = $_POST["paud"];
  $_SESSION["tk"] = $_POST["tk"];
  $_SESSION["skhun"] = $_POST["skhun"];
  $_SESSION["ijazah"] = $_POST["ijazah"];
  $_SESSION["hobi"] = $_POST["hobi"];
  $_SESSION["cita"] = $_POST["cita"];

  // Redirect ke halaman 2
  header("Location: formdatapribadi.php");
}