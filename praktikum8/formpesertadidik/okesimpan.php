<?php
session_start();
require 'koneksi.php';

if(isset($_POST['next1'])) {
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
  header('location: formdatapribadi.php');
}

if(isset($_POST['next2'])) {
  $_SESSION["namalengkappribadi"] = $_POST["namalengkappribadi"];
  $_SESSION["jk"] = $_POST["jk"];
  $_SESSION["nisn"] = $_POST["nisn"];
  $_SESSION["nik"] = $_POST["nik"];
  $_SESSION["tanggallahir"] = $_POST["tanggallahir"];
  $_SESSION["tempatlahir"] = $_POST["tempatlahir"];
  $_SESSION["agama"] = $_POST["agama"];
  $_SESSION["bk"] = $_POST["bk"];
  $_SESSION["alamatjalan"] = $_POST["alamatjalan"];
  $_SESSION["rt"] = $_POST["rt"];
  $_SESSION["rw"] = $_POST["rw"];
  $_SESSION["namadusun"] = $_POST["namadusun"];
  $_SESSION["kelurahan"] = $_POST["kelurahan"];
  $_SESSION["kecamatan"] = $_POST["kecamatan"];
  $_SESSION["kodepos"] = $_POST["kodepos"];
  $_SESSION["tt"] = $_POST["tt"];
  $_SESSION["mt"] = $_POST["mt"];
  $_SESSION["hp"] = $_POST["hp"];
  $_SESSION["telepon"] = $_POST["telepon"];
  $_SESSION["emailpribadi"] = $_POST["emailpribadi"];
  $_SESSION["kip"] = $_POST["kip"];
  $_SESSION["nokip"] = $_POST["nokip"];
  $_SESSION["kewarganegaraan"] = $_POST["kewarganegaraan"];
  $_SESSION["asing"] = $_POST["asing"];
  
  header('location: formayahibu.php');
}

if(isset($_POST['submit'])) {
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
  $namalengkappribadi = $_SESSION["namalengkappribadi"];
  $jk = $_SESSION["jk"];
  $nisn = $_SESSION["nisn"];
  $nik = $_SESSION["nik"];
  $tanggallahir = $_SESSION["tanggallahir"];
  $tempatlahir = $_SESSION["tempatlahir"];
  $agama = $_SESSION["agama"];
  $bk = $_SESSION["bk"];
  $alamatjalan = $_SESSION["alamatjalan"];
  $rt = $_SESSION["rt"];
  $rw = $_SESSION["rw"];
  $namadusun = $_SESSION["namadusun"];
  $kelurahan = $_SESSION["kelurahan"];
  $kecamatan = $_SESSION["kecamatan"];
  $kodepos = $_SESSION["kodepos"];
  $tt = $_SESSION["tt"];
  $mt = $_SESSION["mt"];
  $hp = $_SESSION["hp"];
  $telepon = $_SESSION["telepon"];
  $emailpribadi = $_SESSION["emailpribadi"];
  $kip = $_SESSION["kip"];
  $nokip = $_SESSION["nokip"];
  $kewarganegaraan = $_SESSION["kewarganegaraan"];
  $asing = $_SESSION["asing"];
  
  $namaayah = $_POST["namaayah"];
  $tahunlahirayah = $_POST["tahunlahirayah"];
  $pendidikanayah = $_POST["pendidikanayah"];
  $pekerjaanayah = $_POST["pekerjaanayah"];
  $penghasilanayah = $_POST["penghasilanayah"];
  $bkayah = $_POST["bkayah"];
  $namaibu = $_POST["namaibu"];
  $tahunlahiribu = $_POST["tahunlahiribu"];
  $pendidikanibu = $_POST["pendidikanibu"];
  $pekerjaanibu = $_POST["pekerjaanibu"];
  $penghasilanibu = $_POST["penghasilanibu"];
  $bkibu = $_POST["bkibu"];
  $tanggaldibuat = date('Y-m-d');
  $query = "INSERT INTO tb_form (jp, tanggalmasuksekolah, nis, npu, paud, tk, skhun, ijazah, hobi, cita, namalengkappribadi, jk, nisn, nik, tanggallahir, tempatlahir, agama, bk, alamatjalan, rt, rw, namadusun, kelurahan, kecamatan, kodepos, tt, mt, hp, telepon, emailpribadi, kip, nokip, kewarganegaraan, asing, namaayah, tahunlahirayah, pendidikanayah, pekerjaanayah, penghasilanayah, bkayah, namaibu, tahunlahiribu, pendidikanibu, pekerjaanibu, penghasilanibu, bkibu, tanggaldibuat) 
  VALUES ('$jp', '$tanggalmasuksekolah', '$nis', '$npu', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita', '$namalengkappribadi', '$jk', '$nisn', '$nik', '$tanggallahir', '$tempatlahir', '$agama', '$bk', '$alamatjalan', '$rt', '$rw', '$namadusun', '$kelurahan', '$kecamatan', '$kodepos', '$tt', '$mt', '$hp', '$telepon', '$emailpribadi', '$kip', '$nokip', '$kewarganegaraan', '$asing', '$namaayah', '$tahunlahirayah', '$pendidikanayah', '$pekerjaanayah', '$penghasilanayah', '$bkayah', '$namaibu', '$tahunlahiribu', '$pendidikanibu', '$pekerjaanibu', '$penghasilanibu', '$bkibu', '$tanggaldibuat')";
  if(mysqli_query($conn, $query)) {
    // Menghapus data session
    session_unset();

    // Menghancurkan session
    session_destroy();

    // Mengalihkan ke halaman formlogin.php
    header('location: formlogin.php');
  } else {
    echo "Gagal menyimpan data";
  }
}
?>
