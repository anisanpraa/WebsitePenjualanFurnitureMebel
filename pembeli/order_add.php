<?php 

include("header.php");

  $id_produk = $_GET['id_produk'];
  $jml_order = 1;
  $cek= mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
  $data=mysqli_fetch_array($cek);
?>

<main>
<!--BANNER-->
<section class="banner">
<div class="container">
	<div class="banner-text col-sm-12 col-md-6"><br>
	<h2 class="text-main secondary-col">Detail Produk dan Order</h2>
	<h2 style=" width: 100%; border-bottom: 4px solid #5F9EA0"></h2>

		<form name="orderfix" action="order_add_fix.php" method="GET">
		<div class="table-responsive">
      <br>
  		<table class="table">
		<tbody>

		<tr><td scope="col" colspan="10">
        <h2 class="text-main secondary-col">
        <b><?php echo $data['nama_produk']; ?></b></h2>
        <input type="hidden" name="nama_produk" value="<?=$data['nama_produk']?>"><br>
    </td></tr>

    <tr><td colspan="8">
        <input type="hidden" name="image" value="<?=$data['image']?>">
        <?php echo "<img src='../admin_permata/produk/$data[image]' alt='product' class='img-fluid'>"?>
        </td>
        
        <td>
        	<h7 class="text-main secondary-col">
        	<b>Rentang Harga : <br></b>
        	Rp.<?php echo $data['harga']; ?></h7><br><br>

          <?php
              $sql2 = mysqli_query($koneksi,"SELECT * FROM produk_detail WHERE id_produk='$id_produk'");
              while($data_detail = mysqli_fetch_array($sql2)){
            ?>
            <h7 class="text-main secondary-col">
            <?php echo $data_detail['id_kayu']; ?> = Rp.<?php echo $data_detail['harga_produk'];?>
            <br></h7>

            <?php } ?>
          <br>
          <h7 class="text-main secondary-col">
          <b>Ukuran Produk :</b><br>
          <?php echo $data['ukuran']; ?></h7><br><br>

          <h7 class="text-main secondary-col">
          <b>Sistem PO 14 s/d 30 hari</b><br></h7>

        </td></tr>

        <tr><td colspan="10"><h7 class="text-main secondary-col">
           <b> Deskripsi : </b><?php echo $data['des_produk']; ?></h7>
       	<tr><th scope="col" colspan="10">Orderan</th></tr>
        <tr>
          <td colspan="5">ID Produk</td>
       		<td colspan="5"><input type="text" class="form-control" name="id_produk" value="<?=$data['id_produk']?>" readonly ></td>	
       	</tr>

          <tr><td colspan="5">Jenis Kayu</td>
       	      <td colspan="5">
                  <select name="id_kayu" class="form-control" required>
              <?php

                $sql = mysqli_query($koneksi,"SELECT * FROM kayu");
                while($data_kayu = mysqli_fetch_array($sql)){
              ?>
                    <option value="<?php echo $data_kayu['id_kayu']; ?>">
                    <?php echo $data_kayu['id_kayu']; ?></option>
                    <?php } ?>
                  </select></div></td></tr>
        <tr>
       	  <td colspan="5">Jumlah Order</td>
       		<td colspan="5"><input type="number" required="" class="form-control" name="jml_order" value="<?php echo $jml_order; ?>"  ></td>	
       	</tr>



    </tbody></table></div>

     <?php
        $cek_akun   =mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id_pembeli='$_SESSION[id_pembeli]'");
        $data_akun=mysqli_fetch_array($cek_akun);
    ?>

    <h2 class="text-main secondary-col">Alamat Pengiriman</h2>
	<h2 style=" width: 100%; border-bottom: 4px solid #5F9EA0"></h2>
		
		<div class="table-responsive">
  		<table class="table">
		<tbody>

		<tr><th scope="col" colspan="3">Data Diri Pembeli</th></tr>
		<input type="hidden" class="form-control" name="id_pembeli" value="<?=$data_akun['id_pembeli']?>" readonly >
            <tr><td>Nama</td>
            	<td><input type="text" class="form-control" name="nama_pembeli" 
            		 value="<?=$data_akun['nama_pembeli']?>" readonly></td></tr>
            <tr><td>Email</td>
            	<td><input type="text" class="form-control" name="email" value="<?=$data_akun['email']?>" readonly>
            	</td></tr>
            <tr><td>No HP</td>
            	<td><input type="text" class="form-control" name="no_hp" value="<?=$data_akun['no_hp']?>" readonly>
            	</td></tr>
		<tr><th scope="col" colspan="3">Alamat Pengiriman</th></tr>
		<tr><td>Kabupaten</td>
            	<td><input type="text" class="form-control" name="kabupaten" value="<?=$data_akun['kabupaten']?>"></td></tr>
             <tr><td>Kecamatan</td>
            	<td><input type="text" class="form-control" name="kecamatan" value="<?=$data_akun['kecamatan']?>"></td></tr>
             <tr><td>Desa</td>
            	<td><input type="text" class="form-control" name="desa" value="<?=$data_akun['desa']?>">
            	</td></tr>
             <tr><td>Deskripsi Alamat</td>
            	<td><textarea id="alamat_pengiriman" name="alamat_pengiriman" class="form-control"><?=$data_akun['des_alamat']?></textarea></td></tr>
             <tr><td>Kode POS</td>
            	<td><input type="text" class="form-control" name="kode_pos" value="<?=$data_akun['kode_pos']?>"></td></tr>
            <tr><th colspan="2">
            	<center><button type="submit" class="btn btn-success">Order</button>
            	</center></th></tr>

	</tbody></table></div>


</form></div></div></section>

</main><!--main-->
<?php   include("footer.php"); ?>
</body>
</html>