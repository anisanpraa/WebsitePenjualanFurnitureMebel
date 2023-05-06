<?php 
include '../koneksi.php';

$id_order = $_POST['id_order'];
$id_pembeli = $_POST['id_pembeli'];
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$image = $_POST['image'];
$id_kayu = $_POST['id_kayu'];
$harga = $_POST ['harga'];
$jml_order = $_POST['jml_order'];
$sub_total = $_POST['sub_total'];
$total_pembayaran = $_POST['total_pembayaran'];
$alamat_pengiriman = $_POST['alamat_pengiriman'];
$kode_pos = $_POST['kode_pos'];
$email = $_POST['email'];
$status_order = "Pending";
$status_pembayaran = "Pending";
$time_order =  date("Y-m-d h:i:s");
$no_hp = $_POST['no_hp'];
$nama_pembeli = $_POST['nama_pembeli'];
$jenis_bayar = $_POST['jenis_bayar'];
$jml_bayar = 0;
$sisa_bayar = $total_pembayaran;

if ($jenis_bayar=="DP") {
  $DP = $_POST['DP'];}
  else {$DP=0;}

$order = mysqli_query($koneksi, 
"INSERT INTO orderan VALUES('$id_order','$id_pembeli', '$id_produk', '$nama_produk', '$image', '$id_kayu', '$harga', '$jml_order', '$sub_total', '$total_pembayaran', '$jenis_bayar','$alamat_pengiriman', '$kode_pos', '$jml_bayar', '$sisa_bayar', '$status_order', '$status_pembayaran', '$time_order')");
  if($order){ ?>

<!DOCTYPE html>

<html lang="en" >
<head><meta charset="UTF-8">
<title>KP Kelompok 22-Teknik Informatika 2021 (INVOICE ORDER-<?php echo $id_order;?>)</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<div id="page-wrap">
<textarea id="header">INVOICE ORDER</textarea>
  <div id="identity">
<?php 

  $cek= mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
  $data=mysqli_fetch_array($cek);
?>

   <h1>CV.Permata Rimba</h1>
   <h4>Telepon  : </h4>
   <h4>Telepon  : </h4>
   <h4>Email    : </h4>
   <h4>Sosmed   : </h4>
   <h4>Jl.Raya Awirarangan,Kuningan,Jawa Barat</h4>
   
   <br><br>
   <div style="clear:both">
     <?php echo $nama_pembeli;?><br>
     <?php echo $no_hp;?><br>
     <?php echo $email;?><br>
     <?php echo $alamat_pengiriman;?>,<?php echo $kode_pos;?>
   </div>
   <br><br>
   <div id="customer">
     <?php echo "<img src='../../admin_permata/produk/$data[image]' alt='product' class='img-fluid'>"?>
    <table id="meta">
     <tr><td class="meta-head">Invoice Order</td>
         <td><?php echo $id_order;?></td>
     </tr>
     
     <tr><td class="meta-head">Date Order</td>
         <td><?php echo $time_order;?></td>
     </tr>
     
     <tr><td class="meta-head">Total Pembayaran</td>
        <td><div class="due">Rp.<?php echo $total_pembayaran;?></div></td>
     </tr>

     <tr><td class="meta-head">Status Pembayaran</td>
        <td><div class="due"><?php echo $status_pembayaran;?></div></td>
     </tr>

     <tr><td class="meta-head">Status Orderan</td>
        <td><div class="due"><?php echo $status_order;?></div></td>
     </tr>

    </table>
    </div>

   <table id="items">
    <tr>
     <th>Produk</th>
     <th>Deskripsi</th>
     <th>Jenis Kayu</th>
     <th>Harga Produk</th>
     <th>Quantity</th>
     <th>Total Pembayaran</th>
    </tr>

    <tr class="item-row">
     <td class="item-name">
      <?php echo $id_produk;?> - <?php echo $nama_produk;?></td>

     <td class="description">
      <?php echo $data['des_produk'];?><</td>

     <td><center><?php echo $id_kayu;?></td>
     <td><center>Rp.<?php echo $harga;?></td>
     <td><center><?php echo $jml_order;?></td>
     <td><center><span class="price">Rp.<?php echo $total_pembayaran;?></span></td>
    </tr>

    
    <tr id="hiderow">
     <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
    </tr>

    <tr>
     <td colspan="3" class="blank"> </td>
     <td colspan="2" class="total-line">Sub Total</td>
     <td class="total-value"><div id="subtotal">Rp.<?php echo $sub_total;?></div></td>
    </tr>
    
    <tr>
     <td colspan="3" class="blank"> </td>
     <td colspan="2" class="total-line">Total Pembayaran</td>
     <td class="total-value"><div id="total">Rp.<?php echo $total_pembayaran;?></div></td>
    </tr>
    
    <tr>
     <td colspan="3" class="blank"> </td>
     <td colspan="2" class="total-line">Jenis Pembayaran</td>
     <td class="total-value"><?php echo $jenis_bayar;?></td>
    </tr>

    <tr>
     <td colspan="3" class="blank"> </td>
     <td colspan="2" class="total-line">DP</td>
     <td class="total-value">Rp.<?php echo $DP;?></td>
    </tr>

    <tr>
     <td colspan="3" class="blank"> </td>
     <td colspan="2" class="total-line">Jumlah yang dibayarkan</td>
     <td class="total-value"><textarea id="paid">Rp.<?php echo $jml_bayar;?></textarea></td>
    </tr>

    <tr>
     <td colspan="3" class="blank"> </td>
     <td colspan="2" class="total-line balance">Sisa Pembayaran</td>
     <td class="total-value balance"><div class="due">Rp.<?php echo $sisa_bayar;?></div></td>
    </tr>
   </table>
   <br><br><br><br>

   <div id="customer">
    <table id="meta">
     <tr><th colspan="2">Informasi Rekening Pembayaran</th></tr>
     <tr><td class="meta-head">BNI</td>
         <td><999999</td>
     </tr>
     
     <tr><td class="meta-head">BRI</td>
         <td>888888</td>
     </tr>
     
     <tr><td class="meta-head">BCA</td>
        <td>888888</td>
     </tr>

     <tr><th colspan="2">Atas Nama : CV.Permata Rimba</th></tr>

    </table>
    </div>
   <br><br><br><br>
   <div id="terms">
    <h5>Kelompok KP 22 - CV.Permata Rimba</h5>
    Informasi Terkait Orderan akan dikabarkan lewat Email
   </div>
  </div>
<script>window.print();</script>
 </body>
 </html>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="js/index.js"></script>
</body></html>

<?php  }
else{
  echo "
  <script>
  alert('Order Gagal di Lakukan!');
  window.location = '../belanja.php';
  </script>
  ";
}


?>