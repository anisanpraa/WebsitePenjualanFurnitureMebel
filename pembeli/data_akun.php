 <?php
 	include"header.php";
        $cek    =mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id_pembeli='$_SESSION[id_pembeli]'");
        $data=mysqli_fetch_array($cek);
    ?>
<main>
		
		<!--BANNER-->
		<section class="banner">
		<div class="container">
			<div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
				<div class="banner-text col-sm-12 col-md-6">
					<h2 class="text-main secondary-col">Profil Saya</h2>
					<h2 style=" width: 100%; border-bottom: 4px solid #5F9EA0"></h2>
		<form name="akun_edit" action="proses/update.php" method="post">
			<table class="table">
			<tbody>
			<tr><th scope="col" colspan="3">Data Diri</th></tr>
        	<tr><td>ID Pembeli</td>
            	<td><input readonly type="text" class="form-control" name="id_pembeli" value="<?=$data['id_pembeli']?>"></td></tr>
            <tr><td>Nama</td>
            	<td><input type="text" class="form-control" name="nama_pembeli" 
            		 value="<?=$data['nama_pembeli']?>"></td></tr>
            <tr><td>Email</td>
            	<td><input type="text" class="form-control" name="email" value="<?=$data['email']?>">
            	</td></tr>
            <tr><td>Password</td>
            	<td><input type="text" class="form-control" name="password" value="<?=$data['password']?>"></td></tr>
            <tr><td>No HP</td>
            	<td><input type="text" class="form-control" name="no_hp" value="<?=$data['no_hp']?>">
            	</td></tr>
           	<tr><th scope="col" colspan="3">Data Alamat</th></tr>
            <tr><td>Kabupaten</td>
            	<td><input type="text" class="form-control" name="kabupaten" value="<?=$data['kabupaten']?>"></td></tr>
             <tr><td>Kecamatan</td>
            	<td><input type="text" class="form-control" name="kecamatan" value="<?=$data['kecamatan']?>"></td></tr>
             <tr><td>Desa</td>
            	<td><input type="text" class="form-control" name="desa" value="<?=$data['desa']?>">
            	</td></tr>
             <tr><td>Deskripsi Alamat</td>
            	<td><textarea id="des_alamat" name="des_alamat" class="form-control"><?=$data['des_alamat']?></textarea></td></tr>
             <tr><td>Kode POS</td>
            	<td><input type="text" class="form-control" name="kode_pos" value="<?=$data['kode_pos']?>"></td></tr>
             <tr><td>
             	<button type="submit" class="btn btn-success">Update</button>
             	</td></tr>
    		</tbody></table></form>
					</div>
					<div class="banner-image col-sm-12 col-md-6 d-none d-sm-block">
						<img src="../assets/icons/user.png" alt="image-banner" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
 <?php  	include "footer.php"; ?>