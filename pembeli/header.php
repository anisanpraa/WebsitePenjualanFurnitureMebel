<?php
session_start();
include "koneksi.php" ;
include "modal_logout.html"; ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../library/bootstrap/js/jquery.min.js"></script>
	<script src="../library/bootstrap/js/bootstrap_alpha.min.js"></script>
	<link rel="stylesheet" href="../library/bootstrap/css/bootstrap_alpha.min.css">
	<link rel="stylesheet" href="../library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style/main.css">
	<link href="../style/aos.css" rel="stylesheet">
	<title>CV.Permata Rimba Online Shop | Homepage</title>


</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      	<li class="nav-item">
        	<a class="navbar-brand" href="index.php">Home</a></li>
      	<li class="nav-item">
        	<a class="navbar-brand" href="detail_produk.php">Detail Produk</a></li>
     	<li class="nav-item">
        	<a class="navbar-brand" href="belanja.php">Belanja</a></li>
      	<li class="nav-item">
        	<a class="navbar-brand" href="about_CV.php">About</a></li>

       <?php if(!isset($_SESSION['nama_pembeli'])){ ?>
        <div class="dropdown">
  		<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   		<img src="../assets/icons/user.png" alt="person"  width="30" height="30"></button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  			<a class="dropdown-item" href="login.php">Login</a>
    			<a class="dropdown-item" href="daftar.html">Sign Up</a>
 				 </div></div>
			</div>

		<?php  }else{  ?>
		 <div class="dropdown">
  		 <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   		 <img src="../assets/icons/user.png" alt="person"  width="30" height="30"></button>
   		 <div class="dropdown-menu">
  				<a class="dropdown-item" href="data_akun.php"><?= $_SESSION['nama_pembeli']; ?></a>
  				<a class="dropdown-item" href="konfirmasi_pembayaran.php">Konfirmasi Pembayaran</a>
          <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Logout</button>		
          </div></div>
				</div></div>

		<?php } ?>
    </ul>
    </div>
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="hasil_cari.php" method="GET">
    <input class="form-control mr-sm-2" name="cari" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit">
    <img src="../assets/icons/search.svg" alt="person"  width="30" height="30"></button></form>
</nav></nav>
	</header> 