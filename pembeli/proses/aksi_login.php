<?php
session_start();

include "../koneksi.php";

$email = $_POST["email"];
$password = $_POST["password"];

$login = mysqli_query($koneksi,"SELECT * FROM pembeli WHERE email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);


	if ($cek>0) {
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id_pembeli']   = $data['id_pembeli'];
 		$_SESSION['nama_pembeli'] = $data['nama_pembeli'];
 		$_SESSION['email'] = $data['email'];
 		$_SESSION['password'] = $data['password'];
 		$_SESSION['kode_pos'] = $data['kode_pos'];
 		$_SESSION['desa'] = $data['desa'];
 		$_SESSION['kecamatan'] = $data['kecamatan'];
 		$_SESSION['kabupaten'] = $data['kabupaten'];
 		$_SESSION['des_alamat'] = $data['des_alamat'];
 		$_SESSION['no_hp'] = $data['no_hp'];
	

		echo "
		<script>
		alert('LOGIN BERHASIL!');
		window.location = '../index.php';
		</script>
		";
		
	}else {
		echo "
		<script>
		alert('LOGIN GAGAL! Email/Password Tidak Sesuai!');
		window.location = '../login.php';
		</script>
		";
	}
?>

