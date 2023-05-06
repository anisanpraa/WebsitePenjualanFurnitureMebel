<?php
include("header.php");
?>

	<main>
		
		<!--BANNER-->
		<section class="banner">
			<div class="container">
				<div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
					<div class="banner-text col-sm-12 col-md-6">
						<p class="text-second">Permata Rimba Mebel Shop</p>
						<h1 class="text-main secondary-col">Costum Produk Mebel</h1>
						<p class="text-second">Pilih Produk sesuai dengan Kebutuhan dan Selera </p>
						<a href="belanja.php" class="btn-rounded text-main">SHOP NOW</a>
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
					<div class="text-show-all text-right text-main col-5 col-sm-6 col-md-3 pr-md-0">
						<a href="belanja.php">
							<p>SHOW ALL <img src="../assets/icons/arrow-2.png" alt="icon-arrow"></p>
						</a>
					</div>
				</div>

				<div class="products row justify-content-center">
					<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up">
						<div class="bg-white">
							<div class="product-image text-center">
								<img src="../produk/lemari1.jpg" alt="product" class="img-fluid">
							</div>
							<div class="desc-product">
									<p class="text-second">Lemari</p>
							</div>
						</div>
					</div>

					<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up"
					data-aos-delay="100">
						<div class="bg-white">
							<div class="product-image text-center">
								<img src="../produk/meja_makan1.jpg" alt="product" class="img-fluid">
							</div>
							<div class="desc-product">
									<p class="text-second">Meja</p>
								</a>
							</div>
						</div>
					</div>

					<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up"
					data-aos-delay="200">
						<div class="bg-white">
							<div class="product-image text-center">
								<img src="../produk/rak1.jpg" alt="product" class="img-fluid">
							</div>
							<div class="desc-product">
								<a href="#">
									<p class="text-second">Rak</p>
								</a>
							</div>
						</div>
					</div>

					<div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up"
					data-aos-delay="300">
						<div class="bg-white">
							<div class="product-image text-center">
								<img src="../produk/sofa1.jpg" alt="product" class="img-fluid">
							</div>
							<div class="desc-product">
									<p class="text-second">Kursi</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php
include("footer.php");
?>
	</main><!--main-->
</body>
</html>