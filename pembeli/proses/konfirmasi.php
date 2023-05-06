<?php
include '../koneksi.php';
//menangkap posting dari field input form
$id_order  = $_POST['id_order'];
$bank_tujuan    = $_POST['bank_tujuan'];
$jenisbayar = $_POST['jenisbayar'];
$bank_anda    = $_POST['bank_anda'];
$nama_rek   = $_POST['nama_rek'];
$nominal   = $_POST['nominal'];
$datetime_konfir= $_POST['datetime_konfir'];
$tgl_tf= $_POST['tgl_tf'];
$status="Pending";

 $bayar=mysqli_query($koneksi,"select * from orderan WHERE id_order='$id_order'");
  while($row=mysqli_fetch_array($bayar)){
     $id_orderan = $row['id_order'];  

      if($id_order==$id_orderan){
          $harga=$row['harga'];        
          if ($jenisbayar=="DP") {
            $sisa_bayar = ($harga*50)/100; }
         else{$sisa_bayar=0;}
  }
}

$nama_file = $_FILES['bukti_tf']['name'];
$tmp = $_FILES['bukti_tf']['tmp_name'];
$namafolder="bukti_tf/";
$fotobaru = date('dmYHis')."-".$nama_file;
$path = $namafolder.$fotobaru;


$sql= mysqli_query($koneksi,"SELECT id_order FROM orderan WHERE id_order = '$id_order'");
if($sql -> num_rows == 0){
   echo "<script>
        alert('ID Order Tidak Tersedia! Data Gagal di Submit!');
        window.location = '../konfirmasi_pembayaran.php';
        </script>
        ";
} else { 

$kode = mysqli_query($koneksi, "SELECT id_konfirmasi from konfirmasi_pembayaran order by id_konfirmasi desc");
$data = mysqli_fetch_assoc($kode);
$num = substr($data['id_konfirmasi'], 1, 4);
$add = (int) $num + 1;
if(strlen($add) == 1){
    $format = "K000".$add;
}else if(strlen($add) == 2){
    $format = "K00".$add;
}
else if(strlen($add) == 3){
    $format = "K0".$add;
}else{
    $format = "K".$add;
}

 //folder tempat menyimpan file

if (!empty($tmp)){
    $jenis_gambar=$_FILES['bukti_tf']['type']; //memeriksa format gambar
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png"){
        $path;
        //mengupload gambar dan update row table database dengan path folder dan nama image
        if (move_uploaded_file($tmp,$path)) {
        $query_insert = mysqli_query($koneksi,
        "INSERT INTO konfirmasi_pembayaran (id_konfirmasi,id_order,jenisbayar,bank_tujuan,bank_anda,nama_rek,bukti_tf,nominal,datetime_konfir,tgl_tf,sisa_bayar,status) 
        VALUES ('$format','$id_order','$jenisbayar','$bank_tujuan','$bank_anda','$nama_rek','$fotobaru',
        '$nominal','$datetime_konfir','$tgl_tf','$sisa_bayar','$status')");

echo "
        <script>
        alert('Pesanan akan Segera di Proses!');
        window.location = '../index.php';
        </script>
        ";

//Jika gagal upload, tampilkan pesan Gagal
} else {
echo "<script>
        alert('Data Gagal di Upload!');
        window.location = '../konfirmasi_pembayaran.php';
        </script>
        ";
}
} else {
echo "<script>
        alert('Format File tidak Sesuai!');
        window.location = '../konfirmasi_pembayaran.php';
        </script>
        ";
}
} else {
echo "<script>
        alert('File Gambar Belum di Pilih!');
        window.location = '../konfirmasi_pembayaran.php';
        </script>
        ";
} }

?>
