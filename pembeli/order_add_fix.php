<?php 

include("header.php");
$kode = 
    mysqli_query($koneksi, "SELECT id_order from orderan order by id_order desc");
$data = mysqli_fetch_assoc($kode);
$num = substr($data['id_order'], 2, 4);
$add = (int) $num + 1;
if(strlen($add) == 1){
    $format = "OR00".$add;
}else if(strlen($add) == 2){
    $format = "OR0".$add;
}
else if(strlen($add) == 3){
    $format = "OR0".$add;
}else{
    $format = "OR".$add; }

$id_produk = $_GET['id_produk'];
$id_pembeli = $_GET['id_pembeli'];
$nama_produk = $_GET['nama_produk'];
$no_hp = $_GET['no_hp'];
$email = $_GET['email'];
$nama_pembeli = $_GET['nama_pembeli'];
$image = $_GET['image'];
$id_kayu = $_GET['id_kayu'];
$jml_order = $_GET['jml_order'];
$desa = $_GET['desa'];
$kecamatan = $_GET['kecamatan'];
$kabupaten = $_GET['kabupaten'];
$alamat_pengiriman = $_GET['alamat_pengiriman'];
$kode_pos = $_GET['kode_pos'];

 
  $detail_produk=mysqli_query($koneksi,"select*from produk_detail WHERE id_produk='$id_produk'");
  while($row=mysqli_fetch_array($detail_produk)){
     $id_kayu_detail = $row['id_kayu'];  

      if($id_kayu==$id_kayu_detail){
          $harga_produk=$row['harga_produk'];        
          if (!empty($jml_order)) {
            $total = $harga_produk * $jml_order; 
            $DP = ($total*50)/100; }
  }
 }

?>

<main>
<!--BANNER-->
<section class="banner">
<div class="container">
	<div class="banner-text col-sm-12 col-md-6"><br>
	<h2 class="text-main secondary-col">Detail Order Produk</h2>
	<h2 style=" width: 100%; border-bottom: 4px solid #5F9EA0"></h2>
		<form action="proses/order_add.php" method="POST">	

		<div class="table-responsive">
  		<table class="table">
		<tbody>

<?php 

  $cek= mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
  $data=mysqli_fetch_array($cek);
?>

	<tr><th scope="col" colspan="3">Detail Order</th></tr>
  <input type="hidden" name="id_order" value="<?php echo $format;?>" class="form-control">

  <tr><td>ID Produk</td>
      <td><input type="text" class="form-control" name="id_produk" value="<?=$data['id_produk']?>" readonly ></td>  
  </tr>

  <tr><td>Nama Produk</td>
      <td><input type="text" name="nama_produk" value="<?php echo $nama_produk;?>" class="form-control" readonly></td>
  </tr>

  <tr><td>Image Produk</td>
      <td><input type="hidden" name="image" value="<?=$data['image']?>">
          <?php echo "<img src='../admin_permata/produk/$data[image]' alt='product' class='img-fluid' width='300' height='300'>"?>
        </td></tr>

  <tr><td>Jenis Kayu</td>
       		<td><input type="text" name="id_kayu" class="form-control" value="<?php echo $id_kayu;?>" readonly></td>	
       	</tr>

  <tr><td>Harga Produk</td>
      <td><input type="text" value="<?php echo $harga_produk; ?>" readonly name="harga" class="form-control"></td>	
      </tr>

  <tr><td>Jumlah Order</td>
      <td><input type="number" class="form-control" name="jml_order" value="<?php echo $jml_order; ?>" readonly></td>	
      </tr>

  <tr><td>Sub Total</td>
      <td><input type="number" class="form-control" name="sub_total" value="<?php echo $total; ?>" readonly></td> 
      </tr>

  <tr><td>Total Pembayaran</td>
      <td><input type="number" class="form-control" name="total_pembayaran" value="<?php echo $total; ?>" readonly></td> 
      </tr>

  <tr><td>Jenis Pembayaran</td>
      <td><select name="jenis_bayar" class="form-control">
          <option value="DP">DP (Uang Muka) 50% = <?php echo $DP;?> </option>
          <option value="Lunas">Lunas</option>
      </select></td></tr>
      <input type="hidden" name="DP" value="<?php echo $DP;?>" >
    </tbody></table></div>

    <h2 class="text-main secondary-col">Alamat Pengiriman</h2>
	<h2 style=" width: 100%; border-bottom: 4px solid #5F9EA0"></h2>
		
		<div class="table-responsive">
  		<table class="table">
		<tbody>
    <input type="hidden" class="form-control" name="id_pembeli" value="<?php echo $id_pembeli;?>" >

    <tr><td>Nama Pembeli</td>
        <td><input readonly type="text" class="form-control" name="nama_pembeli" value="<?php echo $nama_pembeli;?>" ></td></tr>
    <tr><td>No HP</td>
        <td><input type="text" class="form-control" name="no_hp" value="<?php echo $no_hp;?>" readonly></td></tr>
    <tr><td>Email</td>
        <td><input type="text" class="form-control" name="email" value="<?php echo $email;?>" readonly></td></tr>
    <tr><td>Alamat</td>
        <td><textarea id="alamat_pengiriman" name="alamat_pengiriman" class="form-control" readonly=""><?php echo $alamat_pengiriman;?>, <?php echo $desa;?>, Kec.<?php echo $kecamatan;?>, Kab.<?php echo $kabupaten;?>, Jawa Barat</textarea></td></tr>
    <tr><td>Kode POS</td>
        <td><input type="text" class="form-control" name="kode_pos" value="<?php echo $kode_pos;?>" readonly></td></tr>
    
    <tr><th colspan="2">
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="cek" required="">
      <h6 align="justify">Produk yang sudah dipesan tidak bisa dibatalkan , kecuali pembeli tidak melakukan pembayaran maka orderan akan dibatalkan oleh admin (Batas Pembayaran 2x24 Jam). Produk akan di produksi sesuai dengan yang dipesan. Dengan mengklik "Konfirmasi Orderan" berarti anda menyetuji semua syarat & ketentuan yang berlaku di Toko Kami dan Mengkonfirmasi bahwa data yang diinputkan benar.</h6>
    </div>
    <tr><th colspan="2">
        <center><button type="submit" class="btn btn-success">Konfirmasi Orderan</button></center></th>
    </tr>

	</tbody></table></div>


</form></div></div></section>

</main><!--main-->
<?php   include("footer.php"); ?>
</body>
</html>