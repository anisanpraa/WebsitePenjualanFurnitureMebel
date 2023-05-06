<?php 
include '../koneksi.php';
$kode = mysqli_query($koneksi, "SELECT id_pembeli from pembeli order by id_pembeli desc");
$data = mysqli_fetch_assoc($kode);
$num = substr($data['id_pembeli'], 1, 4);
$add = (int) $num + 1;
if(strlen($add) == 1){
	$format = "P000".$add;
}else if(strlen($add) == 2){
	$format = "P00".$add;
}
else if(strlen($add) == 3){
	$format = "P0".$add;
}else{
	$format = "P".$add;
}

$nama_pembeli = $_POST['nama_pembeli'];
$email = $_POST['email'];
$password = $_POST['password'];
$kode_pos = $_POST['kode_pos'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$des_alamat = $_POST['des_alamat'];
$no_hp = $_POST['no_hp'];
$password_fix = $_POST['password_fix'];

	if($password == $password_fix){
		$cek = mysqli_query($koneksi, "SELECT email from pembeli where email = '$email'");
		$jml = mysqli_num_rows($cek);

		if($jml == 1){
			echo "<script>
					alert('Email Sudah di Gunakan!');
					window.location = '../daftar.html';
				  </script>";
		die;
		}

	$result = mysqli_query($koneksi, 
	"INSERT INTO pembeli VALUES('$format','$nama_pembeli', '$email', '$password', '$kode_pos', 
	'$desa','$kecamatan', '$kabupaten', '$des_alamat', '$no_hp')");
	if($result){
		echo "
		<script>
		alert('Data Berhasil di Tambahkan! Akun Berhasil di Buat!');
		window.location = '../login.php';
		</script>
		";
	}
}else{  echo "<script>
				  alert('Password Tidak Sesuai!');
				  window.location = '../daftar.html';
				  </script>";
		 } 
?>