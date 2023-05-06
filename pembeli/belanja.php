<?php
include("header.php");
include"cek_akun.html";
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
            <h2 class="text-main">KOLEKSI PRODUK</h2>
          </div>
        </div>

<div class="products row justify-content-center">

<?php if(isset($_SESSION['nama_pembeli'])){ 
        $no = 1;
        $sql = mysqli_query($koneksi,"SELECT * FROM produk");
        while($data = mysqli_fetch_array($sql)){
?>		
	<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up">
	<div class="bg-white">
	 <div class="product-image text-center">
	 <?php echo "<img src='../admin_permata/produk/$data[image]' alt='product' class='img-fluid' >"?>
	 </div>
		<div class="desc-product">
		 <p class="text-second"><b>
		 	<?php echo $data['nama_produk']; ?></b></p>
		 <p class="text-second">Ukuran ( P x L x T ) : </h6><?php echo $data['ukuran']; ?></p>
		 <p class="text-second">Rp.<?php echo $data['harga']; ?></p>
		 <p class="text-second">
			<a href="order_add.php?id_produk=<?php echo $data['id_produk']; ?>" class="btn btn-info">Order</a></p>
		</div>
	</div>
	</div>

<?php 
} 
	}else{ 
        $no = 1;
        $sql = mysqli_query($koneksi,"SELECT * FROM produk");
        while($data = mysqli_fetch_array($sql)){
?>
<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up">
	<div class="bg-white">
	 <div class="product-image text-center">
	 <?php echo "<img src='../admin_permata/produk/$data[image]' alt='product' class='img-fluid' >"?>
	 </div>
		<div class="desc-product">
		 <p class="text-second"><b><?php echo $data['nama_produk']; ?></b></p>
		 <p class="text-second">Ukuran ( P x L x T ) : </h6><?php echo $data['ukuran']; ?></p>
		 <p class="text-second">Rp.<?php echo $data['harga']; ?></p>
		 <p class="text-second">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cekAkun">Order</button></p>
		</div>
	</div>
	</div>


<?php } } ?>

</div></div></section>

<?php include("footer.php"); ?>
	</main><!--main-->
</body></html>