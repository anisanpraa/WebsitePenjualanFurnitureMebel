<?php 
include '../koneksi.php';

$id_pembeli = $_POST['id_pembeli'];
$nama_pembeli = $_POST['nama_pembeli'];
$email = $_POST['email'];
$password = $_POST['password'];
$kode_pos = $_POST['kode_pos'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$des_alamat = $_POST['des_alamat'];
$no_hp = $_POST['no_hp'];
 
 $cek = mysqli_query($koneksi, "SELECT email from pembeli where email = '$email'");
		$jml = mysqli_num_rows($cek);

		if($jml == 1){
			echo "<script>
					alert('Email Sudah di Gunakan!');
					window.location = '../data_akun.php';
				  </script>";
		die;
		}else {

 $update = mysqli_query($koneksi,"UPDATE pembeli SET nama_pembeli='$nama_pembeli', email='$email', password='$password', kode_pos='$kode_pos', desa='$desa', kecamatan='$kecamatan', kabupaten='$kabupaten', des_alamat='$des_alamat', no_hp='$no_hp' WHERE id_pembeli='$id_pembeli'");
if($update){ 
  echo "
		<script>
		alert('Data Berhasil di Update!');
		window.location = '../data_akun.php';
		</script>
		";
  
 }else{
  echo "
		<script>
		alert('Data Gagal di Update!');
		window.location = '../data_akun.php';
		</script>
		";
  
 } }
 ?>