<?php 
	include("header.php");

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk like '%".$cari."%'
		OR nama_produk like '%".$cari."%' OR id_kategori like '%".$cari."%' OR ukuran like '%".$cari."%' OR des_produk like '%".$cari."%' OR harga1 like '%".$cari."%' OR harga2 like '%".$cari."%'");
}else{
	$data = mysqli_query($koneksi,"SELECT * FROM produk");
}

?>
<!--BANNER-->
    <section class="banner">
      <div class="container">
        <div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
          <div class="banner-text col-sm-12 col-md-6">
            <p class="text-second">Permata Rimba Mebel Shop</p>
            <h1 class="text-main secondary-col">Costum Produk Mebel</h1>
            <p class="text-second">Pilih Produk sesuai dengan Kebutuhan dan Selera </p>
          </div>
          <div class="banner-image col-sm-12 col-md-6 d-none d-sm-block">
            <img src="../assets/images/main.png" alt="image-banner" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!--PRODUCTS-->
<section class="products-section">
      <div class="container">
        <div class="text-products row align-items-center">
          <div class="title-product col-7 col-sm-6 col-md-9">
            <h2 class="text-main"><?php   echo "Hasil Pencarian Produk : ".$cari."";?></h2>
          </div>
        </div>
<div class="products row justify-content-center">
<?php 
$no = 1;
while($d=mysqli_fetch_array($data)){
  ?>
<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up" data-aos-delay="100">
  <div class="bg-white">
    <div class="product-image text-center">
    <?php echo "<img src='../admin_permata/produk/$d[image]' alt='product' class='img-fluid' >"?> </div>
      <div class="desc-product">
      <p class="text-second">
      <b><?php echo $d['nama_produk']; ?></b>
      <br><h6><?php echo $d['ukuran']; ?></h6><br>
      <h7>Rp.<?php echo $d['harga1']; ?> - Rp.<?php echo $d['harga2']; ?></h7></p> 
      <a href="order_add.php?id_produk=<?php echo $d['id_produk']; ?>" class="btn btn-info">Order</a>
      </div>
    </div>
  </div>
<?php } ?>
</div></div></section>
<?php include("footer.php"); ?>