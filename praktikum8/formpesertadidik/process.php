<?php
	session_start();
	// Koneksi ke database
	$servername = "localhost";
    $database = "praktikum8";
	$username = "root";
	$password = "";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Ambil data dari formpesertadidik.php
	if (isset($_POST['name']) && isset($_POST['email'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
	}

	// Ambil data dari formdatapribadi.php
	if (isset($_POST['submit'])) {
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		// Insert data ke database
		$sql = "INSERT INTO tb_form (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
		if (mysqli_query($conn, $sql)) {
			echo "Data berhasil disimpan";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		// Hapus data session
		unset($_SESSION['name']);
		unset($_SESSION['email']);
	}
?>
